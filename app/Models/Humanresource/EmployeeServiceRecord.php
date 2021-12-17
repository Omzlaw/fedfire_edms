<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeServiceRecord
 * @package App\Models\Humanresource
 * @version December 17, 2021, 12:15 pm WAT
 *
 * @property \App\Models\Humanresource\User $certifiedBy
 * @property string $date_of_entry_made
 * @property string $detail
 * @property integer $certified_by
 * @property integer $status
 */
class EmployeeServiceRecord extends Model
{
    use SoftDeletes;

    public $table = 'employee_service_record';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'date_of_entry_made',
        'detail',
        'certified_by',
        'employee_id',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_of_entry_made' => 'string',
        'detail' => 'string',
        'certified_by' => 'string',
        'employee_id' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date_of_entry_made' => 'Required',
        'detail' => 'Required',
        'certified_by' => 'Required',
        'status' => 'Required',
        'employee_id' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function certifiedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'certified_by', 'id');
    }
}
