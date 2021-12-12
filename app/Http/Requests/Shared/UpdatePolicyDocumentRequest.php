<?php

namespace App\Http\Requests\Shared;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Shared\PolicyDocument;

class UpdatePolicyDocumentRequest extends FormRequest
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
        $id = $this->route('policyDocument');
        $rules = [
            'file_name' => 'Required|unique:policy_documents,file_name,'.$id,
            'file_number' => 'Required|unique:policy_documents,file_number,'.$id,
            'file_upload' => 'Required'
        ];
        // $rules = PolicyDocument::$rules;

        return $rules;
    }
}
