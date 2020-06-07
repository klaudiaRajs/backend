<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name'
    ];

    //TODO when handled auth add remember_token to hidden fields
    protected $hidden = [];

    protected $casts = [];

    public function rewards()
    {
        return $this->hasMany('App\Reward');
    }

    public function boxes()
    {
        return $this->hasMany('App\Box');
    }

    public function runes()
    {
        return $this->hasMany('App\Rune');
    }

    public static function getForToken($token)
    {
        return self::where('remember_token', $token)->first();
    }
}
