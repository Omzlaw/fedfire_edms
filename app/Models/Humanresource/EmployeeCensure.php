<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EmployeeCensure
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:26 pm UTC
 *
 * @property \App\Models\Humanresource\Employee $employee
 * @property \App\Models\User $compiledBy
 * @property \App\Models\User $createdBy
 * @property \App\Models\User $updatedBy
 * @property string $title
 * @property string $summary
 * @property string $date_recieved
 * @property integer $employee_id
 * @property integer $file_upload
 * @property integer $status
 * @property string $remark
 * @property integer $compiled_by
 * @property string $compiled_at
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeeCensure extends Model
{
    use SoftDeletes;

    public $table = 'employee_censures';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'summary',
        'date_recieved',
        'employee_id',
        'file_upload',
        'file_page_number',
        'status',
        'remark',
        'compiled_by',
        'compiled_at',
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
        'summary' => 'string',
        'date_recieved' => 'string',
        'employee_id' => 'integer',
        'file_upload' => 'string',
        'file_page_number' => 'string',
        'status' => 'integer',
        'remark' => 'string',
        'compiled_by' => 'integer',
        'compiled_at' => 'string',
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
        // 'summary' => 'Required',
        'date_recieved' => 'Required',
        'employee_id' => 'Required',
        'file_page_number' => 'Required',
        // 'file_upload' => 'Required',
        'status' => 'Required',
      //        'remark' => 'Required',
        // 'compiled_by' => 'Required',
        'compiled_at' => 'Required',
     //   'created_by' => 'Required',
    //    'updated_by' => 'Required'
    ];

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
    public function compiledBy()
    {
        return $this->belongsTo(\App\Models\User::class, 'compiled_by', 'id');
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
