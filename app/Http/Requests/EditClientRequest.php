<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditClientRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['nullable'],
            'phone' => ['nullable', 'integer', 'unique:clients,phone'],
            'email' => ['nullable', 'email', 'unique:clients,email'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'country_id' => ['nullable', 'integer', 'exists:countries,id'],
        ];
    }
}
