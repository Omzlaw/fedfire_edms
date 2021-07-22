<?php

namespace App\Http\Requests\Humanresource;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Humanresource\EmployeeChildren;

class CreateEmployeeChildrenRequest extends FormRequest
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
        return EmployeeChildren::$rules;
    }
}