<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeForceService
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:34 pm UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\User $createdBy
 * @property \App\Models\Humanresource\Users $updatedBy
 * @property string $area_of_service
 * @property string $service_no
 * @property string $last_unit
 * @property string $reason_for_leaving
 * @property integer $employee_id
 * @property string $file_upload
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $date_updated
 */
class EmployeeForceService extends Model
{
    use SoftDeletes;

    public $table = 'employee_force_services';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'area_of_service',
        'service_no',
        'last_unit',
        'department',
        'state',
        'zone',
        'region',
        'location',
        'reason_for_leaving',
        'employee_id',
        'file_upload',
        'remark',
        'created_by',
        'updated_by',
        'date_updated'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'area_of_service' => 'string',
        'location' => 'string',
        'department' => 'string',
        'zone' => 'string',
        'state' => 'string',
        'region' => 'string',
        'service_no' => 'string',
        'last_unit' => 'string',
        'reason_for_leaving' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'remark' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'date_updated' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'area_of_service' => 'Required',
        'service_no' => 'Required',
        'last_unit' => 'Required',
        'reason_for_leaving' => 'Required',
        'location' => 'Required',
        'department' => 'Required',
        'zone' => 'Required',
        'state' => 'Required',
        'region' => 'Required',
        'employee_id' => 'Required',
        // 'file_upload' => 'Required',
        //        'remark' => 'Required',
        //   'created_by' => 'Required',
        //    'updated_by' => 'Required',
        'date_updated' => 'Required'
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
    public function state()
    {
        return $this->belongsTo(\App\Models\Shared\State::class, 'state', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function region()
    {
        return $this->belongsTo(\App\Models\Shared\GeoPoliticalZone::class, 'region', 'id');
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
