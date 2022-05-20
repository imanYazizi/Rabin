<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LandingRequest extends FormRequest
{
    public function rules()
    {
        return [
            'content_id' => ['nullable' , 'exists:contents,id'],
            'key' => ['required'],
            'type' => ['required' , Rule::in(['image', 'text' ])],
            'value' => ['required'],
        ];
    }
}
