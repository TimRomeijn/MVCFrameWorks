<?php

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

//General Routing

Route::get('/', function (){
    return view('welcome');
});

//Artists Routing
Route::get('/artists/addwork', 'ArtistsController@addwork');

Route::get('/artists', 'ArtistsController@index');

Route::get('/artists/{artist}', 'ArtistsController@show');




//Admin Routing

//User Routing


