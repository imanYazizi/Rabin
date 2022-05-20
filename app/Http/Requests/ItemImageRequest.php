<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemImageRequest extends FormRequest
{

    public function rules()
    {
        return [
            'image' => ['required' , 'image' , 'mimes:jpg,jpeg,png'],
            'item_id' => ['required' , 'exists:items,id'],
        ];
    }
}
