<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    public function rules()
    {
        return [
            'address' => ['nullable'],
            'title' => ['nullable'],
            'lat_lng' => ['nullable' ],
            ];
    }
}
