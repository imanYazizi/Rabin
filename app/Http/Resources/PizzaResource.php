<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PizzaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name ,
            'price' => $this->price ,
            'selfmades' => new SelfMadeCollection($this->selfmades)

        ];
    }
}
