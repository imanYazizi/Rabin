<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class LandingResource extends JsonResource
{
    public function toArray($request)
    {
        if ($this->type == 'text')
            return [
                'id' => $this->id,
                'type' => $this->type,
                'key' => $this->key,
                'value' => $this->value
            ];
        else
            return [
                'id' => $this->id,
                'type' => $this->type,
                'key' => $this->key,
                'value' => Storage::url($this->value),
            ];
    }

}
