<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeLocalLeave
 * @package App\Models\Humanresource
 * @version July 22, 2021, 11:22 am UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\Employee $leaver
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $no_of_days
 * @property integer $file_page_no
 * @property integer $leave_type_id
 * @property string $from_date
 * @property integer $to_date
 * @property integer $status
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeLocalLeave extends Model
{
    use SoftDeletes;

    public $table = 'employee_local_leaves';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_id',
        'file_upload',
        'no_of_days',
        'file_page_no',
        'leave_type_id',
        'from_date',
        'to_date',
        'status',
        'remark',
        'created_by',
        'updated_by'
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
        'no_of_days' => 'integer',
        'file_page_no' => 'integer',
        'leave_type_id' => 'string',
        'from_date' => 'string',
        'to_date' => 'string',
        'status' => 'string',
        'remark' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'Required',
        // 'file_upload' => 'Required',
        'no_of_days' => 'Required',
        'file_page_no' => 'Required',
        'leave_type_id' => 'Required',
        'from_date' => 'Required',
        'to_date' => 'Required',
        'status' => 'Required',
      //        'remark' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
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
    public function leaveType()
    {
        return $this->belongsTo(\App\Models\Humanresource\LeaveType::class, 'leave_type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'updated_by', 'id');
    }
}
