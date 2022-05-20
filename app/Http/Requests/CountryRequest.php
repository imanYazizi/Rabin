<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['required' , 'image' , 'mimes:jpg,jpeg,png'],
            'name' => ['required'],
            'code' => ['required' , 'integer'],
        ];
    }
}
