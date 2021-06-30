<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Mother;
use App\Models\Character;
use Illuminate\Support\Facades\DB;
use App\Models\House_has_characters;
use Laravel\Lumen\Routing\Controller as BaseController;

class CharacterController extends BaseController
{
    public function item($id)
    {
        $character = Character::find($id);

        dump($character->load('title', 'mother', 'father', 'house'));

        return view('character.bio', ['character' => $character->load('title', 'mother', 'father')]);
    }

    public function list($id)
    {
        // //? Solution avec les "relations" des Models

        $house = House::find($id);

        // dump($house->load(['character']));

        return view('character.house', ['house' => $house->load(['character'])]);

        //? Solution qui fonctionne sans utiliser les "relations" des Models

        // $house = House::Find($id);

        // $characters = DB::table('character')
        // ->join('house_has_characters', 'house_has_characters.character', '=', 'character.id')
        // ->join('house', 'house.id', '=', 'house_has_characters.house')
        // ->select('character.*')
        // ->where('house', '=', "{$id}")
        // ->get();

        // return view('character.house', ['characters' => $characters, 'house' => $house]);

    }


}
