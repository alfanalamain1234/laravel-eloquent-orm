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

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/stadiums', 'App\Http\Controllers\StadiumsController@stadiums')->name('stadiums');
Route::get('/clubs', 'App\Http\Controllers\ClubsController@clubs')->name('clubs');
Route::get('/managers', 'App\Http\Controllers\ManagersController@index')->name('managers');
Route::get('/players', 'App\Http\Controllers\PlayersController@index')->name('players');


