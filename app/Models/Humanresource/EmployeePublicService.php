<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeePublicService
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:19 pm UTC
 *
 * @property string $employer_name
 * @property string $from_date
 * @property string $to_date
 * @property string $file_page_ref
 * @property integer $employee_id
 * @property integer $file_upload_id
 * @property integer $total_years_served
 * @property integer $total_paid
 * @property integer $remark
 * @property integer $checked_by
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeePublicService extends Model
{
    use SoftDeletes;

    public $table = 'employee_public_services';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employer_name',
        'from_date',
        'to_date',
        'file_page_ref',
        'employee_id',
        'file_upload',
        'total_years_served',
        'total_paid',
        'remark',
        'checked_by',
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
        'employer_name' => 'string',
        'from_date' => 'string',
        'to_date' => 'string',
        'file_page_ref' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'total_years_served' => 'integer',
        'total_paid' => 'integer',
        'remark' => 'integer',
        'checked_by' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employer_name' => 'Required',
        'from_date' => 'Required',
        'to_date' => 'Required',
        'file_page_ref' => 'Required',
        'employee_id' => 'Required',
        // 'file_upload' => 'Required',
        'total_years_served' => 'Required',
        'total_paid' => 'Required',
      //        'remark' => 'Required',
        // 'checked_by' => 'Required',
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
    public function checkedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'checked_by', 'id');
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
