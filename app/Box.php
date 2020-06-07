<?php

namespace App;

use App\Http\Resources\BoxResource;
use Illuminate\Htxtp\Request;

class Box extends BaseModel
{

    protected $fillable = [
        'name', 'image_url', 'price', 'user_id'
    ];

    protected $table = 'boxes';

    public function getResource()
    {
        return new BoxResource($this);
    }
}
