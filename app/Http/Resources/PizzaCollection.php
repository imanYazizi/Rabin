<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PizzaCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return $this->collection;
    }
}
