<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EditAdminRequest extends FormRequest
{
    public function rules()
    {

        return [
            'phone' => [
                'nullable',
// todo               Rule::unique('admins' , 'phone')->ignore($admin->id , 'id'),
                ],

            'name' => ['nullable'],
            'role' => ['nullable' , Rule::in(['see', 'edit' , 'none']),],
            'image' => ['nullable' , 'image' , 'mimes:jpg,jpeg,png'],
            'country_id' => ['nullable', 'integer', 'exists:countries,id'],
        ];
    }
}
