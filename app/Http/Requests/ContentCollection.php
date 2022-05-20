<?php

namespace App\Http\Requests;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ContentCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return $this->collection;
    }
}
