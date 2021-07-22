<?php

namespace App\Models\Humanresource;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class EmployeePublicService
 * @package App\Models\Humanresource
 * @version July 22, 2021, 12:19 pm UTC
 *
 * @property string $employer_name
 * @property string $from_date
 * @property string $to_date
 * @property string $file_page_ref
 * @property integer $employee_id
 * @property integer $file_upload_id
 * @property integer $total_years_served
 * @property integer $total_paid
 * @property integer $remark
 * @property integer $checked_by
 * @property integer $created_by
 * @property integer $updated_by
 */
class EmployeePublicService extends Model
{
    use SoftDeletes;

    public $table = 'employee_public_services';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'employer_name',
        'from_date',
        'to_date',
        'file_page_ref',
        'employee_id',
        'file_upload_id',
        'total_years_served',
        'total_paid',
        'remark',
        'checked_by',
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
        'employer_name' => 'string',
        'from_date' => 'datetime',
        'to_date' => 'datetime',
        'file_page_ref' => 'string',
        'employee_id' => 'integer',
        'file_upload_id' => 'integer',
        'total_years_served' => 'integer',
        'total_paid' => 'integer',
        'remark' => 'integer',
        'checked_by' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}