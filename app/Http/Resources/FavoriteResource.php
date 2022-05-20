<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoriteResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'is_menu' => $this->is_menu,
            'item_id' => $this->is_menu ? new ItemResource($this->itemable) : new PizzaResource($this->itemable),
        ];
    }
}
