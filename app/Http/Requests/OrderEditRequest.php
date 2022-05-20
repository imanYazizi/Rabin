<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderEditRequest extends FormRequest
{
    public function rules()
    {
        return [
            'status' => ['required' , Rule::in(['pending' , 'sent' , 'rejected']),],
        ];
    }
}
