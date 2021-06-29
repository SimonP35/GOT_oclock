<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'house';

    public function house_has_characters()
    {
        return $this->belongsTo(House_has_characters::class, 'house');
    }

}

