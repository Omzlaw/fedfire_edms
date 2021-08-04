<?php

namespace App\Models\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class State
 * @package App\Models\Shared
 * @version July 22, 2021, 9:12 pm UTC
 *
 * @property \App\Models\Shared\Country $country
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $title
 * @property string $description
 * @property integer $status
 * @property integer $country_id
 * @property integer $created_by
 * @property integer $updated_by
 */
class State extends Model
{
    use SoftDeletes;

    public $table = 'states';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        // 'description',
        'status',
        'country_id',
        'geo_political_zone_id',
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
        // 'description' => 'string',
        'status' => 'integer',
        'country_id' => 'integer',
        'geo_political_zone_id' => 'integer',
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
        // 'description' => 'Required',
        'status' => 'Required',
        'country_id' => 'Required',
        // 'geo_political_zone_id' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
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
    public function geoPoliticalZones()
    {
        return $this->belongsTo(\App\Models\Shared\GeoPoliticalZone::class, 'geo_political_zone_id', 'id');
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
