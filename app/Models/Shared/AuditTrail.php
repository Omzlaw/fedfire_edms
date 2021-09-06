<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class AuditTrail
 * @package App\Models\Shared
 * @version September 5, 2021, 11:23 pm UTC
 *
 * @property \App\Models\Shared\User $user
 * @property string $description
 * @property integer $user_id
 */
class AuditTrail extends Model
{
    use SoftDeletes;

    public $table = 'audit_trails';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'description',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string',
        'user_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'Required',
        'user_id' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
