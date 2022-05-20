<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ItemEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'name' => ['nullable'],
            'price' => ['nullable'],
            'description' => ['nullable'],
            'item_category_id' => ['nullable', 'integer', 'exists:item_categories,id'],
            'available' => ['nullable', Rule::in([0, 1])],
            'is_special' => ['nullable', Rule::in([0, 1])],
        ];
    }
}
