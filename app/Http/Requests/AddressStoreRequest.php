<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'address' => ['required'],
            'title' => ['nullable'],
            'lat_lng' => ['required' ],
        ];
    }
}
