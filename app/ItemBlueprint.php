<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemBlueprint extends Model
{
    protected $table = "item_blueprints";

    protected $fillable = ['type', 'attributes'];

    public static function getForTypeAndName(string $type, string $name)
    {
        return self::where('type', $type)->where('name', $name)->first();
    }
}
