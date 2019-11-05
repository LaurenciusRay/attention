<?php

namespace App\Http\Requests\events;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventsRequest extends FormRequest
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
            'title' => 'required|min:3',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required|after:start_date',
            'capacity' => 'required',
            'image' => 'image',
            'category' => 'required'
        ];
    }
}
