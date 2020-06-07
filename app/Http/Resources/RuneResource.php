<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RuneResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'imageUrl' => $this->image_url,
            'bonus' => $this->bonus
        ];
    }
}
