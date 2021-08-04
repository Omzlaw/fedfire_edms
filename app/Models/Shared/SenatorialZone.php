<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class SenatorialZone
 * @package App\Models\Shared
 * @version August 3, 2021, 9:24 pm UTC
 *
 * @property \App\Models\Shared\State $state
 * @property \App\Models\Shared\User $createdBy
 * @property \App\Models\Shared\User $updatedBy
 * @property string $title
 * @property integer $status
 * @property integer $state_id
 * @property integer $created_by
 * @property integer $updated_by
 */
class SenatorialZone extends Model
{
    use SoftDeletes;

    public $table = 'senatorial_zones';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'status',
        'state_id',
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
        'title' => 'string',
        'status' => 'integer',
        'state_id' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'Required',
        'status' => 'Required',
        'state_id' => 'Required',
        // 'created_by' => 'Required',
        // 'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function state()
    {
        return $this->belongsTo(\App\Models\Shared\State::class, 'state_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function createdBy()
    {
        return $this->belongsTo(\App\Models\Shared\User::class, 'created_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\Shared\User::class, 'updated_by', 'id');
    }
}
