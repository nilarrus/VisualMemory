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

Auth::routes();
//Pagina inical
Route::get('/', 'homeController@index')->name('index');



//rutas temporales 
Route::get('/m', 'homeController@getMenu')->name('Menu Inicial');
Route::get('/1p', 'homeController@getUnPlayer')->name('Un jugador');
