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

Route::get('/pratos', 'PratoController@index')->middleware('auth');
Route::post('/pratos/novo', 'PratoController@create')->middleware('auth');
Route::get('/pratos/delete/{id}', 'PratoController@destroy')->middleware('auth');     //Deletar Prato normal


Route::get('/pratos2', 'PratoController@index2')->middleware('auth');
Route::post('/pratos2/novo2', 'PratoController@create2')->middleware('auth');
Route::get('/pratos2/delete/{id}', 'PratoController@destroy2')->middleware('auth');     //Deletar Prato saudavel

Route::get('/acompanhamentos', 'AcompanhamentoController@index')->middleware('auth');
Route::post('/acompanhamentos/novo', 'AcompanhamentoController@create')->middleware('auth');
Route::get('/acompanhamentos/delete/{id}', 'AcompanhamentoController@destroy')->middleware('auth');     //Deletar Acompanhamento

Route::get('/pedidos', 'PedidoController@index')->middleware('auth');
Route::get('/pedidos/relatorio/{data}', 'PedidoController@relatorio')->middleware('auth');
Route::post('/pedidos/relatorio2', 'PedidoController@relatorioMensal')->middleware('auth');
Route::get('/pedidos/mensal', 'PedidoController@mensalidade')->middleware('auth');
Route::post('/pedidos/mensal/pesquisa', 'PedidoController@show')->middleware('auth');
Route::get('/pedidos/delete/{id_pedido}', 'PedidoController@destroy')->middleware('auth');            //Deletar Pedido

Route::get('/', 'PedidoController@formulario');            
Route::post('/create', 'PedidoController@create'); 

Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect()
            ->action('PratoController@index');
});

// Route::get('/home', 'HomeController@index')->name('home');
