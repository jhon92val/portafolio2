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



Route::get('/', "InicioController@inicio");

Route::get('/servicios', "InicioController@servicios");

Route::get('/portafolio', "TrabajosController@index");

Route::get('/portafolio/detalle', function () {
    return view('portafolio-detalle');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trabajos/crear', 'HomeController@create')->name('crear');
Route::get('/trabajos/{id}', 'HomeController@show')->name('mostrar');
Route::get('/trabajos/editar/{id}', 'HomeController@edit');
Route::post('/trabajos/guardar', 'HomeController@store')->name('guardar');
Route::get('/trabajos/actualizar/{id}', 'HomeController@update')->name('actualizar');
Route::get('/eliminar', 'HomeController@destroy')->name('eliminar');

Route::get('/imagenes/crear/{id}', 'ImagenController@create')->name('crear');
Route::post('/imagenes/store', 'ImagenController@store')->name('guardar');
Route::get('/imagenes/{id}', 'ImagenController@show')->name('mostrar');
Route::get('/imagenes/eliminar/{id}', 'ImagenController@destroy')->name('borrar');

