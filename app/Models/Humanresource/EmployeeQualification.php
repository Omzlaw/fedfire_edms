<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeQualification
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:44 pm UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\User $checkedBy
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $qualification_name
 * @property string $date_obtained
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $status
 * @property string $remark
 * @property integer $checked_by
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeQualification extends Model
{
    use SoftDeletes;

    public $table = 'employee_qualifications';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'qualification_name',
        'date_obtained',
        'employee_id',
        'file_upload',
        'status',
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
        'qualification_name' => 'string',
        'date_obtained' => 'datetime',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'status' => 'integer',
        'remark' => 'string',
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
        'qualification_name' => 'Required',
        'date_obtained' => 'Required',
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
        'checked_by' => 'Required',
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
