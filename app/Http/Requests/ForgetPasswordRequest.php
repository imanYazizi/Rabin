<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'phone' => ['required_without_all:email', 'exists:clients,phone'],
            'email' => ['required_without_all:phone', 'exists:clients,email'],
        ];
    }
}
