<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ingredientRequest extends FormRequest
{
    public function rules()
    {
        return [
            'ingredient_category_id' => ['required', 'exists:ingredient_categories,id'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'name' => ['required'],
        ];
    }
}
