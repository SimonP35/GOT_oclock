<?php

namespace App\Http\Controllers;

use App\Models\House;
use Laravel\Lumen\Routing\Controller as BaseController;

class HouseController extends BaseController
{
    public function list()
    {
        $houses = House::All();

        // dump($houses);

        return view('houses.houses', [ 'houses' => $houses]);
    }

}
