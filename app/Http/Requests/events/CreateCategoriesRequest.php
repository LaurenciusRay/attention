<?php

namespace App\Http\Requests\events;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoriesRequest extends FormRequest
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
            'name' => 'required|unique:eo_detail_categories|min:3',
        ];
    }
}
