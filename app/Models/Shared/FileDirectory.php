<?php

namespace App\Models\Shared;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FileDirectory
 * @package App\Models\Shared
 * @version July 22, 2021, 12:17 pm UTC
 *
 * @property \App\Models\Shared\FileType $fileType
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $file_upload
 * @property integer $file_type_id
 * @property string $file_url
 * @property integer $staff_no
 * @property integer $status
 * @property string $remark
 * @property integer $created_by
 * @property integer $updated_by
 */
class FileDirectory extends Model
{
    use SoftDeletes;

    public $table = 'file_directories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'file_name',
        'file_upload',
        'file_type_id',
        'file_url',
        'staff_no',
        'status',
        'remark',
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
        'file_upload' => 'array',
        'file_type_id' => 'integer',
        'file_url' => 'array',
        'staff_no' => 'integer',
        'status' => 'integer',
        'remark' => 'string',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'file_upload' => 'Required',
        'file_type_id' => 'Required',
        // 'file_url' => 'Required',
        'staff_no' => 'Required',
        // 'status' => 'Required',
        'remark' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function fileType()
    {
        return $this->belongsTo(\App\Models\Shared\FileType::class, 'file_type_id', 'id');
    }

        /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\Humanresource\Employee::class, 'staff_no', 'id');
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
        return $this->belongsTo(\App\Models\User::class, 'Updated_by', 'id');
    }
}
