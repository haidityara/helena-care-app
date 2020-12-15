<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', 'Admin\AuthController@index');
Route::post('admin/login', 'Admin\AuthController@login');


Route::group(['middleware' => 'AdminAuth'], function () {
    //
    Route::get('admin', 'Admin\UserController@dashboard');
    Route::get('admin/logout', 'Admin\AuthController@logout');

    // users
    Route::get('admin/users', 'Admin\UserController@index');
    Route::post('admin/user/add', 'Admin\UserController@store');

    //   create Categories
    Route::get('admin/categories-adoption', 'Admin\CategoryAdoptionController@index');
    Route::post('admin/categories-adoption/add', 'Admin\CategoryAdoptionController@store');

    //orphanages
    Route::get('admin/orphanages', 'Admin\OrphanageController@index');
    Route::post('admin/orphanage/add', 'Admin\OrphanageController@store');

    //adoptions
    Route::get('admin/adoptions','Admin\AdoptionController@index');
    Route::post('admin/adoption/add','Admin\AdoptionController@store');
    Route::get('admin/adoption/{id}/delete','Admin\AdoptionController@delete');
    // re adaption
    Route::get('admin/requests-adoption','Admin\RequestAdoptionController@index');
});

