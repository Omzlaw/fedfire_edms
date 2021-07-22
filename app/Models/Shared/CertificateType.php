<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CertificateType
 * @package App\Models\Shared
 * @version July 22, 2021, 12:35 pm UTC
 *
 * @property \App\Models\Shared\User $users
 * @property \App\Models\Shared\User $updatedBy
 * @property string $title
 * @property string $description
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 */
class CertificateType extends Model
{
    use SoftDeletes;

    public $table = 'certificate_types';
    

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
        'created_by' => 'Required',
        'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\Shared\User::class, 'users', 'id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function updatedBy()
    {
        return $this->belongsTo(\App\Models\Shared\User::class, 'updated_by', 'id');
    }
}