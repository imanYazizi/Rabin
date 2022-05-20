<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LandingEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'key' => ['nullable'],
            'value' => ['nullable'],
        ];
    }
}
