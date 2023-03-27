<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email|min:5',
            'password' => 'required|min:5',
            'sobre' =>'nullable'
        ];
    }

    public function messages()
    {
        return ([
            'name.required' => 'Insira um Nome',
            'name.min' => 'O nome deve ter pelo menos 3 caracteres',
            'email.required' => 'Insira um Email',
            'email.email' => 'Insira um email válido',
            'email.unique' => 'Este email já foi cadastrado',
            'email.min' => 'O email deve ter pelo menos 5 caracteres',
            'password.required' => 'insira uma senha',
            'password.min' => 'insira uma senha de pelo menos 5 caracteres',
        ]);
    }
}
