<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginTenantUser extends FormRequest
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
            'email'    => [
                'required',
                'email',
                'exists:tenant_users',
                'max:2555'
            ],
            'password' => [
                'required',
                'max:255',
            ]
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'email not registered',
            'email.required' => 'email is required',
            'password.required' => 'password is required',
        ];
    }
}
