<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LocalGovtArea
 * @package App\Models\Shared
 * @version July 22, 2021, 12:48 pm UTC
 *
 * @property \App\Models\Shared\State $state
 * @property \App\Models\Shared\User $createdBy
 * @property \App\Models\Shared\User $updatedBy
 * @property string $title
 * @property string $description
 * @property integer $state_id
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class LocalGovtArea extends Model
{
    use SoftDeletes;

    public $table = 'local_govt_areas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'state_id',
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
        'title' => 'string',
        'description' => 'string',
        'state_id' => 'integer',
        'status' => 'integer',
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
        'description' => 'Required',
        'state_id' => 'Required',
        'status' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
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
