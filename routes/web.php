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

Route::get('/', function () {
    return view('welcome');
});

//Use Case: /posts_near_destination?distance=100&location=42.32232,12.31
Route::get('/posts_near_destination', 'GeoPostController@postsNearDestination');