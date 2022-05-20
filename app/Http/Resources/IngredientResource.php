<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class IngredientResource extends JsonResource
{
    public function toArray($request)
    {
        return [

            'category' => new IngredientCategoryResource($this->category),
            'id' => $this->id,
            'image' => Storage::url($this->image),
            'name' => $this->name,
        ];
    }
}
