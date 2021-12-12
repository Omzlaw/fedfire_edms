<?php

namespace App\Models\Humanresource;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Shared\FileDirectory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Employee
 * @package App\Models\Humanresource
 * @version July 22, 2021, 1:40 pm UTC
 *
 * @property \App\Models\Humanresource\EmployeeCertificate $birthCertificateUpload
 * @property \App\Models\Humanresource\MaritalStatus $maritalStatus
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $service_number
 * @property string $first_name
 * @property string $last_name
 * @property integer $gender
 * @property string $date_of_birth
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

    protected $dates = ['deleted_at', 'date_of_birth', 'date_of_first_appointment', 'date_of_present_appointment'];



    public $fillable = [
        'service_number',
        'first_name',
        'middle_name',
        'last_name',
        'staff_code',
        'religion',
        'gender',
        'gl',
        'date_of_birth',
        'place_of_birth',
        'profile_picture',
        'marital_status_id',
        'date_of_first_appointment',
        // 'first_arrival_date',
        'assumption_of_duty_date',
        'date_of_present_appointment',
        'date_of_confirmation',
        'type_of_appointment',
        'resumption_of_duty_date',
        'nationality',
        'geo_political_zone',
        'state_of_origin',
        'senatorial_zone',
        'local_govt_area',
        'decorations',
        'file_upload',
        'remark',
        'email',
        'phone',
        'status',
        'created_by',
        'updated_by',
        'current_appointment',
        'current_rank',
        'entry_qualification',
        'additional_qualification',
        'retirement_date_by_dob',
        'retirement_year_by_dob',
        'no_of_years_remained_by_dob',
        'retirement_date_by_dofa',
        'no_of_years_remained_by_dofa',
        'IPPIS',
        'cadre',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'service_number' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'staff_code' => 'string',
        'religion' => 'integer',
        'gender' => 'integer',
        'gl' => 'integer',
        'date_of_birth' => 'string',
        'place_of_birth' => 'string',
        'profile_picture' => 'string',
        'marital_status_id' => 'integer',
        'date_of_first_appointment' => 'string',
        'type_of_appointment' => 'string',
        'assumption_of_duty_date' => 'string',
        'date_of_present_appointment' => 'string',
        'date_of_confirmation' => 'string',
        'nationality' => 'integer',
        'geo_political_zone' => 'integer',
        'state_of_origin' => 'integer',
        'senatorial_zone' => 'integer',
        'local_govt_area' => 'integer',
        'decorations' => 'string',
        'file_upload' => 'string',
        'remark' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'status' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'current_appointment' => 'string',
        'current_rank' => 'integer',
        'entry_qualification' => 'string',
        'additional_qualification' => 'string',
        'retirement_date_by_dob' => 'string',
        'retirement_year_by_dob' => 'string',
        'no_of_years_remained_by_dob' => 'integer',
        'retirement_date_by_dofa' => 'string',
        'no_of_years_remained_by_dofa' => 'integer',
        'IPPIS' => 'integer',
        'cadre' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */

    public static $rules = [
        'service_number' => 'Required|Unique:employees',
        'first_name' => 'Required',
        'last_name' => 'Required',
        'gender' => 'Required',
        'date_of_birth' => 'Required',
        'gl' => 'Required',
        'date_of_first_appointment' => 'Required',
        'date_of_present_appointment' => 'Required',
        'email' => 'Required|email|Unique:employees',
        'phone' => 'Required|min:11|max:11|Unique:employees',
    ];

    public function edit_rules() {
        $id = session('employee_id');
        return [
            'service_number' => ['Required',Rule::unique('employees')->ignore($id)],
            'first_name' => 'Required',
            'last_name' => 'Required',
            'gender' => 'Required',
            'date_of_birth' => 'Required',
            'gl' => 'Required',
            'date_of_first_appointment' => 'Required',
            'date_of_present_appointment' => 'Required',
            'email' => ['Required',Rule::unique('employees')->ignore($id)],
            'phone' => ['Required',Rule::unique('employees')->ignore($id)],
        ];
    }


    public function getFullName() {

        if($this->attributes['middle_name'] == ''){
            return $this->attributes['first_name'] . " " . $this->attributes['last_name'];
        }

        else {
            return $this->attributes['first_name'] . " " . $this->attributes['middle_name'] . " " . $this->attributes['last_name'];
        }

    }

    // public function getCurrentRank() {
    //     $active_rank = EmployeeRank::where('status', '=', '1')->where('employee_id', '=', $this->attributes['id'])->first();
    //     return $active_rank['id'];
    // }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function birthCertificateUpload()
    {
        return $this->belongsTo(\App\Models\Humanresource\EmployeeCertificate::class, 'birth_certificate_upload', 'id');
    }

    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  **/
    // public function maritalStatus()
    // {
    //     return $this->belongsTo(\App\Models\Humanresource\MaritalStatus::class, 'marital_status_id', 'id');
    // }

    public function currentRank()
    {
        return $this->belongsTo(\App\Models\Shared\RankType::class, 'current_rank', 'id');
    }

    // public function currentQualification()
    // {
    //     return $this->belongsTo(\App\Models\Shared\QualificationType::class, 'current_qualification', 'id');
    // }

    public function country()
    {
        return $this->belongsTo(\App\Models\Shared\Country::class, 'nationality', 'id');
    }

    public function geoPoliticalZone()
    {
        return $this->belongsTo(\App\Models\Shared\GeoPoliticalZone::class, 'geo_political_zone', 'id');
    }

    public function stateOfOrigin()
    {
        return $this->belongsTo(\App\Models\Shared\State::class, 'state_of_origin', 'id');
    }

    public function senatorialZone()
    {
        return $this->belongsTo(\App\Models\Shared\SenatorialZone::class, 'senatorial_zone', 'id');
    }

    public function localGovtArea()
    {
        return $this->belongsTo(\App\Models\Shared\LocalGovtArea::class, 'local_govt_area', 'id');
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

        /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fileDirectories()
    {
        return $this->hasMany(FileDirectory::class);
    }

    public function actionSheets()
    {
        return $this->hasMany(EmployeeActionSheet::class)->orderBy('id', 'DESC');
    }

    public function addresses()
    {
        return $this->hasMany(EmployeeAddress::class);
    }

    public function censures()
    {
        return $this->hasMany(EmployeeCensure::class);
    }

    public function certificates()
    {
        return $this->hasMany(EmployeeCertificates::class);
    }

    public function children()
    {
       return $this->hasMany(EmployeeChildren::class);

    }


    public function educations()
    {
        return $this->hasMany(EmployeeEducation::class);
    }

    public function ranks()
    {
        return $this->hasMany(EmployeeRank::class);
    }

    public function services()
    {
        return $this->hasMany(EmployeeService::class);
    }

    public function forceServices()
    {
        return $this->hasMany(EmployeeForceService::class);
    }

    public function foreignTours()
    {
        return $this->hasMany(EmployeeForeignTours::class);
    }

    public function gratuities()
    {
        return $this->hasMany(EmployeeGratuity::class);
    }

    public function languages()
    {
        return $this->hasMany(EmployeeLanguage::class);
    }

    public function localLeaves()
    {
        return $this->hasMany(EmployeeLocalLeave::class);
    }

    public function nextOfKins()
    {
        return $this->hasMany(EmployeeNextOfKin::class);
    }

    public function publicServices()
    {
        return $this->hasMany(EmployeePublicService::class);
    }

    public function qualifications()
    {
        return $this->hasMany(EmployeeQualification::class);
    }

    public function recordTrackers()
    {
        return $this->hasMany(EmployeeRecordTracker::class);
    }

    public function terminations()
    {
        return $this->hasMany(EmployeeTermination::class);
    }

    public function spouse()
    {
        return $this->hasMany(EmployeeWife::class);
    }
}
