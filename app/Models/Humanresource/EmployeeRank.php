<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeeRank
 * @package App\Models\Humanresource
 * @version August 9, 2021, 11:09 am UTC
 *
 * @property \App\Models\Humanresource\RankType $rankType
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\Humanresource\User $createdBy
 * @property \App\Models\Humanresource\User $updatedBy
 * @property integer $rank_type_id
 * @property integer $employee_id
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeRank extends Model
{
    use SoftDeletes;

    public $table = 'employee_ranks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'rank_type_id',
        'employee_id',
        'status',
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
        'rank_type_id' => 'string',
        'employee_id' => 'string',
        'status' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rank_type_id' => 'Required',
        'employee_id' => 'Required',
        'status' => 'Required',
        // 'created_by' => 'Required',
        // 'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function rankType()
    {
        return $this->belongsTo(\App\Models\shared\RankType::class, 'rank_type_id', 'id');
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
