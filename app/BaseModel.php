<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    abstract public function getResource();
}
