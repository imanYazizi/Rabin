<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderGroupedCollection extends ResourceCollection
{

    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
