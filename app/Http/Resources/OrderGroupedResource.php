<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderGroupedResource extends JsonResource
{

    public function toArray($request)
    {

        $dayOfWeek = Carbon::createFromFormat('Y-m-d',$this->date)->englishDayOfWeek;
        return [
            $dayOfWeek => [
                "sells" => $this->sells,
            ]
        ];
    }
}
