<?php

namespace App\Http\Requests\Humanresource;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Humanresource\EmployeeLocalLeave;

class UpdateEmployeeLocalLeaveRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = EmployeeLocalLeave::$rules;
        
        return $rules;
    }
}
