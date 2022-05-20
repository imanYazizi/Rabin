<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRegisterRequest extends FormRequest
{

    public function rules()
    {
        return [
            'phone' => ['required', 'integer', 'unique:admins,phone'],
            'name' => ['required'],
            'role' => ['required' , Rule::in(['see', 'edit' , 'none']),],
            'password' => ['required'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'country_id' => ['required', 'integer', 'exists:countries,id'],
        ];
    }
}
