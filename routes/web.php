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

Route::middleware(['auth'])->group(function () {

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
    Route::get('/pedidos/relatorio/{data}', 'PedidoController@relatorio');
    Route::post('/pedidos/relatorio2', 'PedidoController@relatorioMensal');
    Route::get('/pedidos/mensal', 'PedidoController@mensalidade');
    Route::post('/pedidos/mensal/pesquisa', 'PedidoController@show');
    Route::get('/pedidos/delete/{id_pedido}', 'PedidoController@destroy');            //Deletar Pedido
});

Route::get('/', 'PedidoController@formulario');            
Route::post('/create', 'PedidoController@create'); 

Auth::routes();

// Route::get('logout', 'Auth\LoginController@logout', function () {
//     return abort(404);
// });
// Route::get('/logout', function () {
//     Auth::logout();
//     return redirect()
//             ->action('PratoController@index');
// });

// Route::get('/home', 'HomeController@index')->name('home');
