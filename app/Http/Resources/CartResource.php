<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'item_id' => $this->itemable,
            'is_menu' => $this->is_menu,
            'count' => $this->count,
            'amount' => $this->amount,
        ];
    }
}
