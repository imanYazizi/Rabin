<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;


class RegisterRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name' => ['required'],
            'phone' => ['required_without_all:email', 'integer', 'unique:clients,phone'],
            'email' => ['required_without_all:phone', 'email', 'unique:clients,email'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
            'password' => ['required', 'min:8'],
            're_try_Password' => ['required', 'same:password'],
        ];
    }
}
