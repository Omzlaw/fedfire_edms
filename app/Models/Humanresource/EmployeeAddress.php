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
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
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
        'state_id',
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
        'state_id' => 'integer',
        'country_id' => 'integer',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'status' => 'integer',
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
        'state_id' => 'Required',
        'country_id' => 'Required',
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
        'created_by' => 'Required',
        'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function state()
    {
        return $this->belongsTo(\App\Models\Humanresource\State::class, 'state_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Humanresource\Country::class, 'country_id', 'id');
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