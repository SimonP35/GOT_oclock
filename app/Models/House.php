<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'house';

    public function character()
    {
        return $this->hasManyThrough(Character::class, House_has_characters::class, 'house', 'id', 'id', 'character');
    }
}

