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

Route::get('/pratos', 'PratoController@index');
Route::post('/pratos/novo', 'PratoController@create');
Route::post('/pratos/novo2', 'PratoController@create2');

Route::get('/pratos2', 'PratoController@index2');

Route::get('/acompanhamentos', 'AcompanhamentoController@index');
Route::post('/acompanhamentos/novo', 'AcompanhamentoController@create');
