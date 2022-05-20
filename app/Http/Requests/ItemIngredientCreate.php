<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemIngredientCreate extends FormRequest
{
    public function rules()
    {
        return [
            'item_id' => ['required', 'exists:items,id'],
            'ingredient_id' => ['required', 'exists:ingredients,id'],
            'amount' => ['required'],
        ];
    }
}
