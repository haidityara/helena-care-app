<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'API\UserController@store');
Route::post('login', 'API\AuthController@login');

Route::group(['middleware' => 'APIAuth'], function (){
    Route::get('getadoptions', 'API\AdoptionController@index');
});


