<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeGratuity
 * @package App\Models\Humanresource
 * @version July 22, 2021, 1:11 pm UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\User $checkedBy
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $file_page_no
 * @property string $payment_date
 * @property string $from_date
 * @property string $to_date
 * @property integer $years
 * @property integer $months
 * @property integer $days
 * @property integer $status
 * @property number $rate_per_annum
 * @property number $amount_paid
 * @property string $remark
 * @property integer $checked_by
 * @property string $checked_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeGratuity extends Model
{
    use SoftDeletes;

    public $table = 'employee_gratuities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employee_id',
        'file_upload',
        'file_page_no',
        'payment_date',
        'from_date',
        'to_date',
        'years',
        'months',
        'days',
        'status',
        'rate_per_annum',
        'amount_paid',
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
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'file_page_no' => 'integer',
        'payment_date' => 'string',
        'from_date' => 'string',
        'to_date' => 'string',
        'years' => 'integer',
        'months' => 'integer',
        'days' => 'integer',
        'status' => 'string',
        'rate_per_annum' => 'decimal:2',
        'amount_paid' => 'decimal:2',
        'remark' => 'string',
        'checked_by' => 'integer',
        'checked_at' => 'string',
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
        // 'file_upload' => 'Required',
        'file_page_no' => 'Required',
        'payment_date' => 'Required',
        'from_date' => 'Required',
        'to_date' => 'Required',
        'years' => 'Required',
        'months' => 'Required',
        'days' => 'Required',
        'status' => 'Required',
        'rate_per_annum' => 'Required',
        'amount_paid' => 'Required',
      //        'remark' => 'Required',
        // 'checked_by' => 'Required',
        'checked_at' => 'Required',
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
    public function checkedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'checked_by', 'id');
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
