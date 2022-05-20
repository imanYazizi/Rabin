<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;


class SelfMadeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'category' => new SelfMadeCategoryResource($this->category) ,
            'id' => $this->id,
            'image' => Storage::url($this->image),
            'name' => $this->name ,
            'price' => $this->price ,
            'amount_1x' => $this->amount_1x ,
            'amount_2x' => $this->amount_2x ,
            'amount_3x' => $this->amount_3x ,
        ];
    }
}
