<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    protected $table = 'character';

    public function Character()
    {
        return $this->hasMany(Character::class, 'id');
    }

}
