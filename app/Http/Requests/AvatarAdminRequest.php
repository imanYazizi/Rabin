<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarAdminRequest extends FormRequest
{ public function rules()
{
    return [
        'image' => ['required' , 'image' , 'mimes:jpg,jpeg,png'],
        'admin_id' => ['required' , 'exists:admins,id'],
    ];
}
}
