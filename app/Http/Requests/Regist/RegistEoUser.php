<?php

namespace App\Http\Requests\Regist;

use Illuminate\Foundation\Http\FormRequest;

class RegistEoUser extends FormRequest
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
            'name'    => [
                'required',
                'max:2555'
            ],
            'photo' => [
                'required',
                'mimes:jpeg,bmp,png',
                'max:2048',
            ],
            'email' => [
                'required',
                'unique:eo_users',
            ],
            'password' => [
                'required',
                'min:8',
            ],
            'description' => [
                'required'
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "your name or organization's name is required",
            'photo.required' => "your photo or organization's logo is required",
            'description.required' => 'description is required',
            'email.required' => 'email is required',
            'password.required' => 'password is required',
        ];
    }
}
