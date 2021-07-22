<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeChildren
 * @package App\Models\Humanresource
 * @version July 22, 2021, 11:37 am UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\User $checkedBy
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property string $name
 * @property integer $gender
 * @property string $birthday
 * @property integer $employee_id
 * @property string $file_upload
 * @property string $remark
 * @property integer $checked_by
 * @property string $checked_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeChildren extends Model
{
    use SoftDeletes;

    public $table = 'employees_children';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'gender',
        'birthday',
        'employee_id',
        'file_upload',
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
        'name' => 'string',
        'gender' => 'integer',
        'birthday' => 'date',
        'employee_id' => 'integer',
        'file_upload' => 'string',
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
        'name' => 'Required',
        'gender' => 'Required',
        'birthday' => 'Required',
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'remark' => 'Required',
        'checked_by' => 'Required',
        'checked_at' => 'Required',
        'created_by' => 'Required',
        'updated_by' => 'Required'
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
