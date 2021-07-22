<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeRecordTracker
 * @package App\Models\Humanresource
 * @version July 22, 2021, 10:34 am UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property integer $employee_id
 * @property integer $status
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $has_profile
 * @property integer $has_education
 */
class EmployeeRecordTracker extends Model
{
    use SoftDeletes;

    public $table = 'employee_record_trackers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_id',
        'status',
        'remark',
        'created_by',
        'updated_by',
        'has_profile',
        'has_education'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employee_id' => 'integer',
        'status' => 'integer',
        'remark' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'has_profile' => 'integer',
        'has_education' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
        'created_by' => 'Required',
        'updated_by' => 'Required',
        'has_profile' => 'Required',
        'has_education' => 'Required'
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
