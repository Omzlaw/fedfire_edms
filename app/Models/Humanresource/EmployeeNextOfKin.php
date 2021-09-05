<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeNextOfKin
 * @package App\Models\Humanresource
 * @version July 22, 2021, 10:59 pm UTC
 *
 * @property \App\Models\Humanresource\Relationship $relationship
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $name
 * @property string $address
 * @property integer $relationship_id
 * @property integer $employee_id
 * @property string $file_upload
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeNextOfKin extends Model
{
    use SoftDeletes;

    public $table = 'employee_next_of_kins';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'phone',
        'relationship_id',
        'employee_id',
        'file_upload',
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
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'relationship_id' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
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
        'name' => 'Required',
        'address' => 'Required',
        'phone' => 'Required',
        'relationship_id' => 'Required',
        'employee_id' => 'Required',
        // 'file_upload' => 'Required',
      //        'remark' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function relationship()
    {
        return $this->belongsTo(\App\Models\Shared\Relationship::class, 'relationship_id', 'id');
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
