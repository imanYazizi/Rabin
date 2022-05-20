<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ClientResource extends JsonResource
{

    public function toArray($request){
        return [
            'id' => $this->id,
            'role' => 'user',
            'image' => $this->avatar ? Storage::url($this->avatar) : '',
            'name' => $this->name ?? '' ,
            'phone' => $this->phone ?? '' ,
            'email' => $this->email ?? '' ,
            'orders' => new OrderCollection($this->orders)
        ];
    }

}
