<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        switch($this->method()) {
            case 'POST':
            {
                return [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|same:confirmed',
                    'distributor_id'=>'required',
                    'cpf_cnpj'=>'required',
                    'installation_code'=>'nullable',
                    'birth',
                    'auto_billing',
                    'discount',
                    'phone',
                    'address',
                    'zip_code',
                    'number',
                    'complement',
                    'district',
                    'city',
                    'state',
                ];
            }
            case 'PUT':
            {
                return [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users,id,' . $this->get('id'),
                    'password' => 'required|string|min:6|same:confirmed',
                    'distributor_id'=>'required',
                    'cpf_cnpj'=>'required',
                    'installation_code'=>'nullable',
                    'birth',
                    'auto_billing',
                    'discount',
                    'phone',
                    'address',
                    'zip_code',
                    'number',
                    'complement',
                    'district',
                    'city',
                    'state'
                ];
            }
            default:
                break;

        }
    }
}
