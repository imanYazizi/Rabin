<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ItemRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'name' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'item_category_id' => ['required', 'integer', 'exists:item_categories,id'],
            'available' => ['required', Rule::in([0, 1])],
            'is_special' => ['required', Rule::in([0, 1])],
            'ingredients' => ['nullable'],

        ];
    }
}
