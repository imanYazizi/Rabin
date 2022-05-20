<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    public function rules()
    {
        return [
            'count' => ['required' , 'integer'],
            'pizza_id' => ['required_without_all:item_id' , 'exists:pizzas,id'],
            'item_id' => ['required_without_all:pizza_id' , 'exists:items,id'],
        ];
    }
}
