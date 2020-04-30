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

Route::get('/', 'homeController@getLogin')->name('Pantalla principal');
Route::get('/r', 'homeController@getRegister')->name('Pantalla registro');

//rutas temporales 
Route::get('/m', 'homeController@getMenu')->name('Menu Inicial');
