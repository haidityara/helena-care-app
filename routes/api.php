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
    // user information
    Route::get('user-info', 'API\UserController@info');
    // adoption
    Route::get('getadoptions', 'API\AdoptionController@index');
    Route::get('list-adoption-categoriey/{category_id}', 'API\AdoptionController@byCategory');
    Route::get('adoption/{id}', 'API\AdoptionController@getOne');
    Route::post('adoption-request','API\RequestAdoptionController@store');
    //category adoption
    Route::get('adoption-categories','API\CategoryAdoptionController@index');
    Route::post('my-request-adoption','API\RequestAdoptionController@getMyRequest');
});


