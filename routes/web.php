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
    return view('landing.landing');
});

Route::get('mapa', function () {
    return view('mapa');
});
Route::get('index','indexController@index')->name('index');
Route::resource('/login','Auth\LoginController');
Route::get('formulario-forestal','FormularioController@forestal')->name('formulario.forestal');
Route::get('formulario-cultivos','FormularioController@cultivos')->name('formulario.cultivos');
Route::get('formulario-pecuario','FormularioController@pecuario')->name('formulario.pecuario');
Route::get('anexos','FormularioController@noAgropecuario')->name('anexos');
Route::resource('usuarios', 'UsersController');
Route::resource('preguntas','PreguntasController');
Route::resource('formularios', 'FormulariosController');
Route::resource('formulario', 'FormularioController');
Route::post('formularioc','FormularioC@store' )->name('formulario.storec');
Route::post('formulario','FormularioController@store' )->name('formulario.store');
Route::post('formulariop','FormularioP@store' )->name('formularios.storep');
Route::post('formularios','FormulariosController@store' )->name('formularios.store');

Route::resource('respuestas', 'RespuestasController');


Auth::routes();


Route::get('/home', 'HomeController@index');
