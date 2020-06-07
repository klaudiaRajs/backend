<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BoxResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'image_url' => $this->image_url,
            'price' => $this->price
        ];
    }
}
