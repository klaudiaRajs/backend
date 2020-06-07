<?php

namespace App;

use App\Http\Resources\RewardResource;

class Reward extends BaseModel
{
    protected $table = 'rewards';
    protected $fillable = [
        'name', 'image_url', 'code', 'status', 'user_id'
    ];

    public function getResource()
    {
        return new RewardResource($this);
    }
}
