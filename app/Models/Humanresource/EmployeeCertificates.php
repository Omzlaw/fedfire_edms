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
 * @property \App\Models\User $checkedBy
 * @property \App\Models\User $updatedBy
 * @property \App\Models\User $createdBy
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
        'certificate_type_id',
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
        'certificate_type_id' => 'string',
        'date_obtained' => 'string',
        'employee_id' => 'integer',
        'status' => 'string',
        'remark' => 'string',
        'checked_by' => 'integer',
        'checked_at' => 'string',
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
        'certificate_type_id' => 'Required',
        'status' => 'Required',
      //        'remark' => 'Required',
        // 'checked_by' => 'Required',
        'checked_at' => 'Required',
        // 'updated_by' => 'Required',
        // 'file_upload' => 'Required',
        // 'created_by' => 'Required'
    ];

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function certificateType()
    {
        return $this->belongsTo(\App\Models\Shared\CertificateType::class, 'certificate_type_id', 'id');
    }

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
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'updated_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'created_by', 'id');
    }
}
