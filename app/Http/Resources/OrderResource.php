<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
//            'client' => new ClientResource($this->client) ,
            'order_number' =>$this->order_number ,
            'client_id' =>$this->client_id ,
            'is_pay' => (bool)$this->is_pay ,
            'total_price' => $this->total_price ,
            'status' => $this->status ,
            'address' => new AddressResource($this->address) ,
            'carts' => new CartCollection($this->carts),

        ];
    }
}
