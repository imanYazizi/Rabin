<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['nullable' , 'image' , 'mimes:jpg,jpeg,png'],
            'name' => ['nullable'],
        ];
    }
}
