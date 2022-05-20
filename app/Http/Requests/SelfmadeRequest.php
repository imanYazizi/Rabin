<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelfmadeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'name' => ['required'],
            'price' => ['required'],
            'amount_1x' => ['required'],
            'amount_2x' => ['required'],
            'amount_3x' => ['required'],
            'selfmade_category_id' => ['required', 'integer', 'exists:selfmade_categories,id'],
        ];
    }
}
