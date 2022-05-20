<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class selfmadeCategoryEdit extends JsonResource
{
    public function rules()
    {
        return [
            'image' => ['nullable' , 'image' , 'mimes:jpg,jpeg,png'],
            'name' => ['nullable'],
            'type' => ['nullable'],
        ];
    }
}
