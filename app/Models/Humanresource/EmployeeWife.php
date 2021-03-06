<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeWife
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:03 pm UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\User $checkedBy
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $spouse_name
 * @property string $spouse_birthdate
 * @property string $marriage_date
 * @property integer $employee_id
 * @property string $file_upload
 * @property string $remark
 * @property string $checked_by
 * @property string $created_by
 * @property integer $updated_by
 */
class EmployeeWife extends Model
{
    use SoftDeletes;

    public $table = 'employee_wives';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'spouse_name',
        'spouse_birthdate',
        'marriage_date',
        'employee_id',
        'file_upload',
        'remark',
        'checked_by',
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
        'spouse_name' => 'string',
        'spouse_birthdate' => 'string',
        'marriage_date' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'remark' => 'string',
        'checked_by' => 'string',
        'created_by' => 'string',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'spouse_name' => 'Required',
        'spouse_birthdate' => 'Required',
        'marriage_date' => 'Required',
        'employee_id' => 'Required',
        // 'file_upload' => 'Required',
      //        'remark' => 'Required',
        // 'checked_by' => 'Required',
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
