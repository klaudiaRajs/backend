<?php

namespace App\Util;


use App\Box;
use App\Reward;
use App\Rune;

class ItemFactory
{
    const BOX = "BOX";
    const RUNE = "RUNE";
    const REWARD = "REWARD";

    public static function getModelForType(string $type)
    {
        switch($type){
            case self::BOX:
                return new Box();
            case self::RUNE:
                return new Rune();
            case self::REWARD:
                return new Reward();
            default:
                return null;
        }
    }
}
