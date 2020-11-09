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
Route::get('/pratos/delete/{id}', 'PratoController@destroy');     //Deletar Prato normal


Route::get('/pratos2', 'PratoController@index2');
Route::post('/pratos2/novo2', 'PratoController@create2');
Route::get('/pratos2/delete/{id}', 'PratoController@destroy2');     //Deletar Prato saudavel

Route::get('/acompanhamentos', 'AcompanhamentoController@index');
Route::post('/acompanhamentos/novo', 'AcompanhamentoController@create');
Route::get('/acompanhamentos/delete/{id}', 'AcompanhamentoController@destroy');     //Deletar Acompanhamento

Route::get('/pedidos', 'PedidoController@index');
Route::get('/pedidos/relatorio', 'PedidoController@relatorio');