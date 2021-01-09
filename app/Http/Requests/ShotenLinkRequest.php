<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShotenLinkRequest extends FormRequest
{
    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'link' => 'required|url'
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'link.required' => 'Link is required',
            'link.url' => 'Link should be URL format',
        ];
    }
}
