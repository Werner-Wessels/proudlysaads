<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|string|min:10|max:12|regex:/^([0-9\s\-\+\(\)]*)$/',
            'id_num' => 'required|string',
            'town' => 'required|string',
            'province' => 'required|string',
            'email' => 'required|email',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'We need to know what your name is.',
            'name.string' => 'Your name may only contain letters.',
            'phone.required' => 'Please provide us with your phone number.',
            'id_num.required' => 'Please provide us with your valid South African ID Number.',
        ];
    }
}
