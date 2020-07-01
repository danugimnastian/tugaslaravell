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

Route::get('/home', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/congrats', function () {
    return view('congrats');
});

//Route::get('/halo/{nama}', function($nama) {
//    return "halo $nama";
//});

Route::get('/home', 'HomeController@home');

Route::get('/form', 'FormController@form');

Route::get('/congrats', 'CongratsController@congrats');

