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
use App\Work;

//General Routing

Route::get('/', 'WelcomeController@index');


//Artists and works Routing
Route::get('/artists/addwork', 'ArtistsController@addwork');

Route::post('/artists/addwork', 'WorksController@store');

Route::get('/artists', 'ArtistsController@index');

Route::get('/artists/{id}', 'ArtistsController@show');

Route::get('/works/{work}', 'WorksController@show');

Route::get('/artists/works/{work}', 'WorksController@show');

Route::post('/works/{work}/ratings', 'RatingsController@store');

//Styles routing

Route::get('/styles/{id}','StylesController@show');

Route::get('/styles/works/{work}','WorksController@show');

//Admin Routing

//User Routing

Route::get('/users/', 'UsersController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
