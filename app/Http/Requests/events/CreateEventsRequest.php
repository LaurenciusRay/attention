<?php

namespace App\Http\Requests\events;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventsRequest extends FormRequest
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
            'title' => 'required|unique:eo_details',
            'description' => 'required',
            'image' => 'required|image',
            'image_layout' => 'required|image',
            'capacity' => 'required',
        ];
    }
}
