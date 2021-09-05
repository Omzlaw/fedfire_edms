<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeAddress
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:10 pm UTC
 *
 * @property \App\Models\Humanresource\State $state
 * @property \App\Models\Humanresource\Country $country
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $address
 * @property integer $state_id
 * @property integer $country_id
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $status
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeAddress extends Model
{
    use SoftDeletes;

    public $table = 'employee_addresses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'address',
        'address_type',
        'state_id',
        'local_govt_area_id',
        'country_id',
        'employee_id',
        'file_upload',
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
        'address' => 'string',
        'address_type' => 'string',
        'state_id' => 'integer',
        'local_govt_area_id' => 'integer',
        'country_id' => 'integer',
        'employee_id' => 'integer',
        'file_upload' => 'string',
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
        'address' => 'Required',
        'address_type' => 'Required',
        'state_id' => 'Required',
        // 'local_govt_area_id' => 'Required',
        'country_id' => 'Required',
        'employee_id' => 'Required',
        // 'file_upload' => 'Required',
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
    public function state()
    {
        return $this->belongsTo(\App\Models\Shared\State::class, 'state_id', 'id');
    }

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function localGovtArea()
    {
        return $this->belongsTo(\App\Models\Shared\LocalGovtArea::class, 'local_govt_area_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Shared\Country::class, 'country_id', 'id');
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
