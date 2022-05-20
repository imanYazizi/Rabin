<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['required' , 'image' , 'mimes:jpg,jpeg,png'],
            'name' => ['required'],
        ];
    }
}
