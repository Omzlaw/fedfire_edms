<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeForeignTours
 * @package App\Models\Humanresource
 * @version July 22, 2021, 1:29 pm UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\EmployeeLocalLeave $leaver
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $leaver_id
 * @property string $from_date
 * @property string $to_date
 * @property integer $status
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $date_started
 * @property integer $tour_gazette_no
 * @property number $tour_length
 * @property string $leave_due_date
 * @property string $leave_departure_date
 * @property integer $leave_gazette_no
 * @property string $return_due_date
 * @property string $granted_extension_date
 * @property string $duty_resumption_date
 * @property string $passed_to_uk
 * @property string $passed_from_uk
 * @property integer $resident_months
 * @property integer $resident_days
 * @property integer $leave_months
 * @property integer $leave_days
 */
class EmployeeForeignTours extends Model
{
    use SoftDeletes;

    public $table = 'employee_foreign_tours';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_id',
        'file_upload',
        'leaver_id',
        'from_date',
        'to_date',
        'status',
        'remark',
        'created_by',
        'updated_by',
        'date_started',
        'tour_gazette_no',
        'tour_length',
        'leave_due_date',
        'leave_departure_date',
        'leave_gazette_no',
        'return_due_date',
        'granted_extension_date',
        'duty_resumption_date',
        'passed_to_uk',
        'passed_from_uk',
        'resident_months',
        'resident_days',
        'leave_months',
        'leave_days'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'leaver_id' => 'integer',
        'from_date' => 'datetime',
        'to_date' => 'datetime',
        'status' => 'integer',
        'remark' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'date_started' => 'datetime',
        'tour_gazette_no' => 'integer',
        'tour_length' => 'double',
        'leave_due_date' => 'datetime',
        'leave_departure_date' => 'datetime',
        'leave_gazette_no' => 'integer',
        'return_due_date' => 'datetime',
        'granted_extension_date' => 'datetime',
        'duty_resumption_date' => 'datetime',
        'passed_to_uk' => 'string',
        'passed_from_uk' => 'string',
        'resident_months' => 'integer',
        'resident_days' => 'integer',
        'leave_months' => 'integer',
        'leave_days' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'leaver_id' => 'Required',
        'from_date' => 'Required',
        'to_date' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required',
        'date_started' => 'Required',
        'tour_gazette_no' => 'Required',
        'tour_length' => 'Required',
        'leave_due_date' => 'Required',
        'leave_departure_date' => 'Required',
        'leave_gazette_no' => 'Required',
        'return_due_date' => 'Required',
        'granted_extension_date' => 'Required',
        'duty_resumption_date' => 'Required',
        'passed_to_uk' => 'Required',
        'passed_from_uk' => 'Required',
        'resident_months' => 'Required',
        'resident_days' => 'Required',
        'leave_months' => 'Required',
        'leave_days' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\Humanresource\Employee::class, 'employee_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function leaver()
    {
        return $this->belongsTo(\App\Models\Humanresource\EmployeeLocalLeave::class, 'leaver_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'created_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'updated_by', 'id');
    }
}
