<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddAddressToOrder extends FormRequest
{
    public function rules()
    {
        return [
            'address_id' => ['required' , 'exists:addresses,id'],
        ];
    }
}
