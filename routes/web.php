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

Route::get('/', function() {
    return view('pages/index');
});

Route::get('/detail', function() {
    return view('pages/detail');
});

Route::get('/listing', function() {
    return view('pages/listing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events', 'EventController@index');

Route::get('/createEvent', function() {
    return view('pages/createEvent');
});

Route::post('/insertevent', 'EventController@addEvent');
