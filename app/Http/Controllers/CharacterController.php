<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Laravel\Lumen\Routing\Controller as BaseController;

class CharacterController extends BaseController
{
    public function index()
    {
        $characters = Character::All();
        $viewName = "index";

        return view('character.list', ['characters' => $characters->load('house'), 'viewName' => $viewName]);
    }

    public function item($id)
    {
        $character = Character::find($id);

        return view('character.bio', ['character' => $character->load('title', 'mother', 'father')]);
    }

    public function list($id)
    {
        // //? Solution avec les "relations" des Models

        $house = House::find($id);
        $viewName = "house";

        return view('character.list', ['house' => $house->load(['character']), 'viewName' => $viewName]);

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
