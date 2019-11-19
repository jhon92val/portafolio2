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

use App\Http\Controllers\InicioController;

Route::get('/', "InicioController@inicio");

Route::get('/servicios', "InicioController@servicios");

Route::get('/portafolio', "InicioController@portafolio");

Route::get('/portafolio-detalle', function () {
    return view('portafolio-detalle');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trabajos/crear', 'HomeController@create')->name('crear');
Route::post('/guardar', 'HomeController@store')->name('guardar');
Route::get('/actualizar', 'HomeController@update')->name('actualizar');
Route::get('/eliminar', 'HomeController@destroy')->name('eliminar');


Auth::routes();