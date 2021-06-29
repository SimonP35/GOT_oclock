<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House_has_characters extends Model
{
    protected $table = 'house_has_characters';

    public function character()
    {
        return $this->hasOne(Character::class, 'id');
    }

    public function house()
    {
        return $this->hasOne(House::class, 'id');
    }

}
