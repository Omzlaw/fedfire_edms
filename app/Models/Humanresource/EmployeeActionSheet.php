<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeActionSheet
 * @package App\Models\Humanresource
 * @version July 22, 2021, 11:50 am UTC
 *
 * @property \App\Models\User $actionBy
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $folio
 * @property string $action_at
 * @property integer $created_by
 * @property integer $updated_by
 * @property string $date_cleared
 * @property integer $action_by
 * @property string $remark
 */
class EmployeeActionSheet extends Model
{
    use SoftDeletes;

    public $table = 'employee_action_sheet';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'folio',
        'action_at',
        'employee_id',
        'created_by',
        'updated_by',
        'date_cleared',
        'action_by',
        'remark'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'folio' => 'string',
        'employee_id' => 'integer',
        'action_at' => 'datetime',
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'date_cleared' => 'datetime',
        'action_by' => 'integer',
        'remark' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'employee_id' => 'Required',
        'folio' => 'Required',
        'action_at' => 'Required',
        //   'created_by' => 'Required',
        //    'updated_by' => 'Required',
        'date_cleared' => 'Required',
        'action_by' => 'Required',
        'remark' => 'Required'
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
    public function actionBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'action_by', 'id');
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
