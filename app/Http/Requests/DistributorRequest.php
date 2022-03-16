<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DistributorRequest extends FormRequest
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
        return [
            'name' => 'required|max:100',
            'cnpj' => 'required|max:18',
            'value_te' => 'required|numeric',
            'value_tusd' => 'required|numeric',
            'value_icms' => 'required|numeric',
        ];
    }
}
