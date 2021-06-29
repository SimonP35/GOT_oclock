<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Laravel\Lumen\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function index()
    {
        $characters = Character::All();

        return view('main.index', ['characters' => $characters]);
    }

}
