<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Employee
 * @package App\Models\Humanresource
 * @version July 22, 2021, 1:40 pm UTC
 *
 * @property \App\Models\Humanresource\EmployeeCertificate $birthCertificateUpload
 * @property \App\Models\Humanresource\MaritalStatus $maritalStatus
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property string $file_no
 * @property string $first_name
 * @property string $last_name
 * @property integer $gender
 * @property string $birthdate
 * @property string $place_of_birth
 * @property integer $birth_certificate_upload
 * @property integer $marital_status_id
 * @property string $first_appointment_date
 * @property string $first_arrival_date
 * @property string $nationality
 * @property string $decorations
 * @property string $file_upload
 * @property string $remark
 * @property string $email
 * @property string $phone
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $current_appointment
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'file_no',
        'first_name',
        'last_name',
        'gender',
        'birthdate',
        'place_of_birth',
        'birth_certificate_upload',
        'marital_status_id',
        'first_appointment_date',
        'first_arrival_date',
        'nationality',
        'decorations',
        'file_upload',
        'remark',
        'email',
        'phone',
        'status',
        'created_by',
        'updated_by',
        'current_appointment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'file_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'integer',
        'birthdate' => 'datetime',
        'place_of_birth' => 'string',
        'birth_certificate_upload' => 'integer',
        'marital_status_id' => 'integer',
        'first_appointment_date' => 'datetime',
        'first_arrival_date' => 'datetime',
        'nationality' => 'integer',
        'decorations' => 'string',
        'file_upload' => 'string',
        'remark' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'status' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'current_appointment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_no' => 'Required',
        'first_name' => 'Required',
        'last_name' => 'Required',
        'gender' => 'Required',
        'birthdate' => 'Required',
        'place_of_birth' => 'Required',
        'birth_certificate_upload' => 'Required',
        'marital_status_id' => 'Required',
        'first_appointment_date' => 'Required',
        'first_arrival_date' => 'Required',
        'nationality' => 'Required',
        'decorations' => 'Required',
        'file_upload' => 'Required',
        'remark' => 'Required',
        'email' => 'Required',
        'phone' => 'Required',
        'status' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required',
        'current_appointment' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function birthCertificateUpload()
    {
        return $this->belongsTo(\App\Models\Humanresource\EmployeeCertificate::class, 'birth_certificate_upload', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function maritalStatus()
    {
        return $this->belongsTo(\App\Models\Humanresource\MaritalStatus::class, 'marital_status_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(\App\Models\Shared\Country::class, 'nationality', 'id');
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
