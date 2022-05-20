<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurrentPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'current_password' =>  ['required'],
        ];
    }
}
