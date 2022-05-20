<?php

namespace App\Http\Resources;

use App\Models\ItemCategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class ItemResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'category' => new ItemCategoryResource($this->category) ,
            'id' => $this->id,
            'image' => Storage::url($this->image),
            'available' => (bool)$this->available ,
            'is_special' => (bool)$this->is_special ,
            'name' => $this->name ,
            'price' => $this->price ,
            'description' => $this->description ,
            'ingredients' => new IngredientCollection($this->ingredients)
        ];
    }
}
