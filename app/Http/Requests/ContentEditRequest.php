<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => ['nullable'],
            'description' => ['nullable'],
        ];
    }
}
