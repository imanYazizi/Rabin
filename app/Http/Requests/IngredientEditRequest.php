<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'ingredient_category_id' => ['nullable', 'exists:ingredient_categories,id'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'name' => ['nullable'],

        ];
    }
}
