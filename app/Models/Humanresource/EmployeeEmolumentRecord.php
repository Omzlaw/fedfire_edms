<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeEmolumentRecord
 * @package App\Models\Humanresource
 * @version December 17, 2021, 12:29 pm WAT
 *
 * @property \App\Models\Humanresource\SalaryScale $salaryScale
 * @property \App\Models\Humanresource\User $certifiedBy
 * @property string $date_entry_made
 * @property integer $salary_scale
 * @property number $basic_salary_pa
 * @property number $inducement_pay_pa
 * @property string $increment_date
 * @property string $authority
 * @property integer $certified_by
 * @property integer $status
 */
class EmployeeEmolumentRecord extends Model
{
    use SoftDeletes;

    public $table = 'employee_emolument_records';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'date_entry_made',
        'salary_scale',
        'basic_salary_pa',
        'inducement_pay_pa',
        'increment_date',
        'employee_id',
        'authority',
        'certified_by',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date_entry_made' => 'string',
        'salary_scale' => 'string',
        'basic_salary_pa' => 'decimal:2',
        'inducement_pay_pa' => 'decimal:2',
        'increment_date' => 'string',
        'authority' => 'string',
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
        'date_entry_made' => 'Required',
        'salary_scale' => 'Required',
        'basic_salary_pa' => 'Required',
        'inducement_pay_pa' => 'Required',
        'increment_date' => 'Required',
        'authority' => 'Required',
        'employee_id' => 'Required',
        'status' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function salaryScale()
    {
        return $this->belongsTo(\App\Models\Humanresource\SalaryScale::class, 'salary_scale', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function certifiedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'certified_by', 'id');
    }
}
