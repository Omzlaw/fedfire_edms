<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeTermination
 * @package App\Models\Humanresource
 * @version July 22, 2021, 11:48 am UTC
 *
 * @property \App\Models\Humanresource\User $compiledBy
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\EmployeeTermination $termination.id
 * @property string $termination_id
 * @property integer $employee_id
 * @property string $file_upload
 * @property string $even_date
 * @property integer $is_pensionable
 * @property number $pension_amount
 * @property string $pension_start_date
 * @property number $gratuity_amount
 * @property string $contract_gratuity
 * @property number $estate_gratuity_amount_paid
 * @property number $widow_pension_amount
 * @property string $widow_pension_start_date
 * @property number $orphan_pension_amonut
 * @property integer $nigeria_total_service_years
 * @property integer $nigeria_total_service_months
 * @property integer $nigeria_total_service_days
 * @property number $total_naria_salary
 * @property string $summary
 * @property string $remark
 * @property integer $status
 * @property integer $compiled_by
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeTermination extends Model
{
    use SoftDeletes;

    public $table = 'employee_terminations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'termination_id',
        'employee_id',
        'file_upload',
        'even_date',
        'is_pensionable',
        'pension_amount',
        'pension_start_date',
        'gratuity_amount',
        'contract_gratuity',
        'estate_gratuity_amount_paid',
        'widow_pension_amount',
        'widow_pension_start_date',
        'orphan_pension_amonut',
        'nigeria_total_service_years',
        'nigeria_total_service_months',
        'nigeria_total_service_days',
        'total_naria_salary',
        'summary',
        'remark',
        'status',
        'compiled_by',
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
        'termination_id' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'even_date' => 'datetime',
        'is_pensionable' => 'integer',
        'pension_amount' => 'decimal:2',
        'pension_start_date' => 'datetime',
        'gratuity_amount' => 'decimal:2',
        'contract_gratuity' => 'string',
        'estate_gratuity_amount_paid' => 'decimal:2',
        'widow_pension_amount' => 'decimal:2',
        'widow_pension_start_date' => 'datetime',
        'orphan_pension_amonut' => 'decimal:2',
        'nigeria_total_service_years' => 'integer',
        'nigeria_total_service_months' => 'integer',
        'nigeria_total_service_days' => 'integer',
        'total_naria_salary' => 'decimal:2',
        'summary' => 'string',
        'remark' => 'string',
        'status' => 'integer',
        'compiled_by' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'termination_id' => 'Required',
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'even_date' => 'Required',
        'is_pensionable' => 'Required',
        'pension_amount' => 'Required',
        'pension_start_date' => 'Required',
        'gratuity_amount' => 'Required',
        'contract_gratuity' => 'Required',
        'estate_gratuity_amount_paid' => 'Required',
        'widow_pension_amount' => 'Required',
        'widow_pension_start_date' => 'Required',
        'orphan_pension_amonut' => 'Required',
        'nigeria_total_service_years' => 'Required',
        'nigeria_total_service_months' => 'Required',
        'nigeria_total_service_days' => 'Required',
        'total_naria_salary' => 'Required',
        'summary' => 'Required',
        'remark' => 'Required',
        'status' => 'Required',
        'compiled_by' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function compiledBy()
    {
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'compiled_by', 'id');
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
    public function termination_type()
    {
        return $this->belongsTo(\App\Models\Humanresource\TerminationType::class, 'termination_id', 'id');
    }

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\Humanresource\Employee::class, 'employee_id', 'id');
    }
}
