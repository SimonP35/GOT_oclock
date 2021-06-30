<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'character';

    public function title()
    {
        return $this->hasOne(Title::class, 'id', 'id_title');
    }

    public function mother()
    {
        return $this->hasOne(Mother::class, 'id', 'mother_id');
    }

    public function father()
    {
        return $this->hasOne(Father::class, 'id', 'father_id');
    }

    public function house()
    {
        return $this->hasManyThrough(House::class, House_has_characters::class, 'character', 'id', 'id', 'house');
    }

}
