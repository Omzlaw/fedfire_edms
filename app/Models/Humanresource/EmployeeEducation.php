<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeEducation
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:12 pm UTC
 *
 * @property \App\Models\Humanresource\EmployeeCertificate $certificate
 * @property \App\Models\Humanresource\SchoolType $schoolType
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\User $checkedBy
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property string $school_name
 * @property integer $certificate_id
 * @property integer $school_type_id
 * @property string $from_date
 * @property string $to_date
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $status
 * @property string $remark
 * @property integer $checked_by
 * @property string $checked_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeEducation extends Model
{
    use SoftDeletes;

    public $table = 'employee_education';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'school_name',
        'certificate_id',
        'school_type_id',
        'from_date',
        'to_date',
        'employee_id',
        'file_upload',
        'status',
        'remark',
        'checked_by',
        'checked_at',
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
        'school_name' => 'string',
        'certificate_id' => 'integer',
        'school_type_id' => 'integer',
        'from_date' => 'datetime',
        'to_date' => 'datetime',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'status' => 'integer',
        'remark' => 'string',
        'checked_by' => 'integer',
        'checked_at' => 'datetime',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'school_name' => 'Required',
        'certificate_id' => 'Required',
        'school_type_id' => 'Required',
        'from_date' => 'Required',
        'to_date' => 'Required',
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
        'checked_by' => 'Required',
        'checked_at' => 'Required',
        'created_by' => 'Required',
        'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function certificate()
    {
        return $this->belongsTo(\App\Models\Humanresource\EmployeeCertificate::class, 'certificate_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function schoolType()
    {
        return $this->belongsTo(\App\Models\Humanresource\SchoolType::class, 'school_type_id', 'id');
    }

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
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'checked_by', 'id');
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
