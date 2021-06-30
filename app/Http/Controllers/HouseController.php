<?php

namespace App\Http\Controllers;

use App\Models\House;
use Laravel\Lumen\Routing\Controller as BaseController;

class HouseController extends BaseController
{
    public function list()
    {
        $houses = House::All();

        return view('houses.houses', [ 'houses' => $houses]);
    }

}
