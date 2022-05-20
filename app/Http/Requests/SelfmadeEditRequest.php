<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelfmadeEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png'],
            'name' => ['nullable'],
            'price' => ['nullable'],
            'amount_1x' => ['nullable'],
            'amount_2x' => ['nullable'],
            'amount_3x' => ['nullable'],
            'selfmade_category_id' => ['nullable', 'integer', 'exists:selfmade_categories,id'],
        ];
    }
}
