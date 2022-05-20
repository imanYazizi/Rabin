<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['nullable' , 'image' , 'mimes:jpg,jpeg,png'],
            'name' => ['required'],
            'selfmades' => ['required' , 'array'],
        ];
    }
}
