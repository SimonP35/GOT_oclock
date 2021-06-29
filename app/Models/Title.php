<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $table = 'title';

    public function Character()
    {
        return $this->hasMany(Character::class, 'id_title');
    }

}
