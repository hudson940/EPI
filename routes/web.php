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


Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/','indexController@index');
Route::get('index','indexController@index');
Route::resource('/login','Auth\LoginController');

Route::get('formulario-cultivos','FormularioController@cultivos')->name('formularo.cultivos');
Route::get('formulario-pecuario','FormularioController@pecuario')->name('formulario.pecuario');
Route::get('formulario-no-agropecuario','FormularioController@noAgropecuario')->name('formulario.nopec');
Route::resource('usuarios', 'UsersController');
Route::resource('preguntas','PreguntasController');
Route::resource('formularios', 'FormulariosController');
Route::resource('formulario', 'FormularioController');


