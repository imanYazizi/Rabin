<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class IngredientCategoryResource extends JsonResource

{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => Storage::url($this->image),
            'name' => $this->name,
        ];
    }
}
