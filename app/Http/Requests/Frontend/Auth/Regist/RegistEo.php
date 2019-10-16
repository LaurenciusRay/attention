<?php

namespace App\Http\Requests\Frontend\Auth\Regist;

use Illuminate\Foundation\Http\FormRequest;

class RegistEo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique',
            'password' => 'required|string|min:6',
            'description' => 'required',
            'image_banner' => 'required',
        ];
    }
}
