<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeCertificates
 * @package App\Models\Humanresource
 * @version July 22, 2021, 11:10 am UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\User $checkedBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property \App\Models\Humanresource\User $createdBy
 * @property string $certificate_name
 * @property integer $date_obtained
 * @property integer $employee_id
 * @property integer $status
 * @property string $remark
 * @property integer $checked_by
 * @property integer $checked_at
 * @property integer $updated_by
 * @property string $file_upload
 * @property integer $created_by
 */
class EmployeeCertificates extends Model
{
    use SoftDeletes;

    public $table = 'employee_certificate';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'certificate_name',
        'date_obtained',
        'employee_id',
        'status',
        'remark',
        'checked_by',
        'checked_at',
        'updated_by',
        'file_upload',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'certificate_name' => 'string',
        'date_obtained' => 'integer',
        'employee_id' => 'integer',
        'status' => 'integer',
        'remark' => 'string',
        'checked_by' => 'integer',
        'checked_at' => 'integer',
        'updated_by' => 'integer',
        'file_upload' => 'string',
        'created_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'certificate_name' => 'Required',
        'date_obtained' => 'Required',
        'employee_id' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
        'checked_by' => 'Required',
        'checked_at' => 'Required',
        'updated_by' => 'Required',
        'file_upload' => 'Required',
        'created_by' => 'Required'
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
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'checked_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'updated_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\Humanresource\User::class, 'created_by', 'id');
    }
}