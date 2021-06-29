<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $table = 'character';

    public function title()
    {
        return $this->belongsTo(Title::class, 'id_title');
    }

    public function mother()
    {
        return $this->belongsTo(Mother::class, 'mother_id');
    }

    public function father()
    {
        return $this->belongsTo(Father::class, 'father_id');
    }

    public function house_has_characters()
    {
        return $this->belongsTo(House_has_characters::class, 'character');
    }

}
