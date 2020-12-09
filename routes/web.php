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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index','UsersController@index');

Route::get('/','RestaurantsController@restaurants');

//-------------------- top-------------------------
Route::get('/api/allWines','APIController@search');

Route::get('/api/top', 'RestaurantsController@top');

Route::get('/api/allrestaurants', 'APIController@allRestaurants');

//-------------------- top-------------------------
Route::get('restaurant/{id}','RestaurantsController@profile');
Route::get('/create','RestaurantsController@create');
Route::post('/','RestaurantsController@store');
Route::post('restaurant/{id}/review','RestaurantsController@storeReview');

// json
Route::get('api/recipes', 'ApiController@recipes');

Route::view('/search', 'search');

