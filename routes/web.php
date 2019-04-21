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
    return view('index');
});

Route::get('/times', 'ControladorTime@index');

Route::get('/times/novo', 'ControladorTime@create');

Route::post('/times', 'ControladorTime@store');

Route::get('/times/apagar/{id}', 'ControladorTime@destroy');

Route::get('/times/editar/{id}', 'ControladorTime@edit');

Route::post('/times/{id}', 'ControladorTime@update');

Route::get('/times/expjogadores/{id}', 'ControladorTime@exportcsv');

Route::get('/times/exportartimes', 'ControladorTime@exportTimesCSV');


Route::get('/jogadores', 'ControladorJogador@index');

Route::get('/jogadores/novo', 'ControladorJogador@create');

Route::post('/jogadores', 'ControladorJogador@store');

Route::get('/jogadores/apagar/{id}', 'ControladorJogador@destroy');

Route::get('/jogadores/editar/{id}', 'ControladorJogador@edit');

Route::post('/jogadores/{id}', 'ControladorJogador@update');
