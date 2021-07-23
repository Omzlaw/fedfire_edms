<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeLanguage
 * @package App\Models\Humanresource
 * @version July 22, 2021, 10:53 am UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property integer $speaking_fluency
 * @property integer $writing_fluency
 * @property string $exam_qualified
 * @property integer $employee_id
 * @property string $file_upload
 * @property integer $status
 * @property string $remark
 * @property integer $checked_by
 * @property string $checked_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeLanguage extends Model
{
    use SoftDeletes;

    public $table = 'employee_languages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'speaking_fluency',
        'writing_fluency',
        'exam_qualified',
        'employee_id',
        'file_upload',
        'status',
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
        'speaking_fluency' => 'integer',
        'writing_fluency' => 'integer',
        'exam_qualified' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'status' => 'integer',
        'remark' => 'string',
        'checked_by' => 'integer',
        'checked_at' => 'datetime',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'speaking_fluency' => 'Required',
        'writing_fluency' => 'Required',
        'exam_qualified' => 'Required',
        'employee_id' => 'Required',
        'file_upload' => 'Required',
        'status' => 'Required',
        'remark' => 'Required',
        'checked_by' => 'Required',
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
