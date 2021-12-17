<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeBirthParticular
 * @package App\Models\Humanresource
 * @version December 13, 2021, 10:28 am WAT
 *
 * @property \App\Models\Humanresource\User $checkedBy
 * @property \App\Models\Humanresource\Employee $employee
 * @property string $date
 * @property string $home_place
 * @property string $proof
 * @property integer $checked_by
 * @property integer $employee_id
 */
class EmployeeBirthParticular extends Model
{
    use SoftDeletes;

    public $table = 'employee_birth_particulars';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'date',
        'home_place',
        'proof',
        'checked_by',
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
        'date' => 'string',
        'home_place' => 'string',
        'proof' => 'string',
        'checked_by' => 'integer',
        'employee_id' => 'integer',
        'status' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'Required',
        'home_place' => 'Required',
        'proof' => 'Required',
        'checked_by' => 'Required',
        'employee_id' => 'Required'
    ];

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
    public function employee()
    {
        return $this->belongsTo(\App\Models\Humanresource\Employee::class, 'employee_id', 'id');
    }
}
