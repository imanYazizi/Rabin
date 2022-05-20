<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VerifyPhoneRequest extends FormRequest
{
    public function rules()
    {
        return [
            'phone' => ['required', 'integer', 'exists:clients,phone'],
            'code' => ['required'],
        ];
    }
}
