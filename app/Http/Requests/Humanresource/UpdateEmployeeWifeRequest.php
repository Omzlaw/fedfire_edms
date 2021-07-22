<?php

namespace App\Http\Requests\Humanresource;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Humanresource\EmployeeWife;

class UpdateEmployeeWifeRequest extends FormRequest
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
        $rules = EmployeeWife::$rules;
        
        return $rules;
    }
}
