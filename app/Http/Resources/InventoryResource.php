<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InventoryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'boxes' => BoxResource::collection($this->boxes),
            'rewards' => RewardResource::collection($this->rewards),
            'runes' => RuneResource::collection($this->runes)
        ];
    }
}
