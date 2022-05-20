<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LandingCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return $this->collection;
    }
}
