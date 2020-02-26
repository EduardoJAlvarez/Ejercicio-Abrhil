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
    return view('auth.login');
});
/*Declararemos todos las rutas, para que el usuario puedo interactuar con el sistema*/ 
Route::resource('herramientas', 'HerramientasController');
Route::resource('vender', 'VenderController');
Route::resource('vendidos', 'VendidosController');
Route::resource('devueltos', 'DevueltosController');
Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

