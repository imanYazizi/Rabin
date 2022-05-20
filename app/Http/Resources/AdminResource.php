<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class AdminResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => Storage::url($this->image),
            'name' => $this->name,
            'phone' => $this->phone,
            'role' => $this->role,
            'country_id' => $this->country_id,
        ];
    }
}
