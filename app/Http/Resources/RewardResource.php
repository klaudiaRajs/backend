<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RewardResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'imageUrl' => $this->image_url,
            'code' => $this->code,
            'status' => $this->status
        ];
    }
}
