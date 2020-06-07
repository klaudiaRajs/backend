<?php

namespace App;

use App\Http\Resources\RuneResource;

class Rune extends BaseModel
{
    protected $table = "runes";
    protected $fillable = [
        'name', 'image_url', 'bonus', 'user_id'
    ];

    public function getResource()
    {
        return new RuneResource($this);
    }
}
