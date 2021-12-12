<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class PolicyDocument
 * @package App\Models\Shared
 * @version December 3, 2021, 11:27 am WAT
 *
 * @property string $file_name
 * @property string $file_number
 * @property integer $status
 */
class PolicyDocument extends Model
{
    use SoftDeletes;

    public $table = 'policy_documents';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'file_name',
        'file_number',
        'file_url',
        'volume',
        'file_upload',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'file_name' => 'string',
        'volume' => 'string',
        'file_number' => 'string',
        'file_upload' => 'array',
        'file_url' => 'array',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_name' => 'Required|unique:policy_documents,file_name',
        'file_number' =>  array(
            'required',
            'regex:/^[A-Z0-9]{3}\/[A-Z]{3}\/[0-9]{2}\/[0-9]{4}/',
            'unique:policy_documents,file_number',
        ),
        'file_upload' => 'Required'
    ];


}
