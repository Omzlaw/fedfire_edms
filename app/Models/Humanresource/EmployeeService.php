<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeService
 * @package App\Models\Humanresource
 * @version September 2, 2021, 8:33 am UTC
 *
 * @property integer $present_department
 * @property integer $state
 * @property integer $zone
 * @property integer $region
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeService extends Model
{
    use SoftDeletes;

    public $table = 'employee_services';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_id',
        'present_department',
        'state',
        'zone',
        'region',
        'location',
        'present_station',
        'status',
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
        'employee_id' => 'string',
        'present_station' => 'string',
        'present_department' => 'string',
        'state' => 'string',
        'zone' => 'string',
        'location' => 'string',
        'region' => 'string',
        'status' => 'string',
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
        'present_department' => 'Required',
        'present_station' => 'Required',
        'state' => 'Required',
        'zone' => 'Required',
        'location' => 'Required',
        'region' => 'Required',
        'status' => 'Required'
    ];


    public function regionRelation()
    {
        return $this->belongsTo(\App\Models\Shared\GeoPoliticalZone::class, 'region', 'id');
    }

    // public function stateRelation()
    // {
    //     return $this->belongsTo(\App\Models\Shared\State::class, 'state', 'id');
    // }

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
