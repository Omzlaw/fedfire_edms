<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class GeoPoliticalZone
 * @package App\Models\Shared
 * @version August 3, 2021, 9:19 pm UTC
 *
 * @property \App\Models\Shared\Country $country
 * @property string $title
 * @property integer $status
 * @property integer $country_id
 */
class GeoPoliticalZone extends Model
{
    use SoftDeletes;

    public $table = 'geo_political_zones';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'status',
        'country_id',
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
        'country_id' => 'integer',
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
        'country_id' => 'Required'
        // 'created_by' => 'Required',
        // 'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function country()
    {
        return $this->belongsTo(\App\Models\Shared\Country::class, 'country_id', 'id');
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
