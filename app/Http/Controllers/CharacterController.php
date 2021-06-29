<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\House;
use App\Models\House_has_characters;
use Laravel\Lumen\Routing\Controller as BaseController;

class CharacterController extends BaseController
{
    public function item($id)
    {
        $character = Character::find($id);

        // dump($character->load('title', 'mother', 'father'));

        return view('character.bio', ['character' => $character->load('title', 'mother', 'father')]);
    }

    public function list($id)
    {
        $houses = House::find($id);
        $characters = Character::All();
        $houses_characters = House_has_characters::Find($id);

        dump($characters->load('house_has_characters'), $houses->load('house_has_characters'), $houses_characters->load('house', 'character'));

        return view('character.house', [ 'characters' => $characters->load('house_has_characters'), 'houses' => $houses->load('house_has_characters'), 'houses_characters' => $houses_characters->load('house', 'character')]);
    }


}
