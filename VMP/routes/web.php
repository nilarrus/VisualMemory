<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Menu principal
Route::get('/menu', 'HomeController@index')->name('menu');

//Joc un jugador
Route::post('/gp1', 'GamePlayerOne@game')->name('gp1');
