<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TerminationType
 * @package App\Models\Humanresource
 * @version July 22, 2021, 9:13 pm UTC
 *
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $title
 * @property string $description
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class TerminationType extends Model
{
    use SoftDeletes;

    public $table = 'termination_types';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
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
        'status' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
    ];

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
