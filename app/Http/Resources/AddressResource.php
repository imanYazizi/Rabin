<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class AddressResource extends JsonResource
{
    public function toArray($request){
        return [
            'id' => $this->id,
            'client_id' => $this->client_id,
            'title' => $this->title ?? '' ,
            'address' => $this->address ,
            'lat_lng' => $this->lat_lng,
        ];
    }
}
