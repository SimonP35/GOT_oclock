<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get(
    '/',
    [
        'uses' => 'CharacterController@index',
        'as'   => 'character-index'
    ]
);

Route::get(
    '/character/{id}',
    [
        'uses' => 'CharacterController@item',
        'as'   => 'character-item'
    ]
);

Route::get(
    '/houses',
    [
        'uses' => 'HouseController@list',
        'as'   => 'houses-list'
    ]
);

Route::get(
    '/house/{id}',
    [
        'uses' => 'CharacterController@list',
        'as'   => 'house-list'
    ]
);
