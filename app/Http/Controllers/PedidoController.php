<?php

namespace cardapio\Http\Controllers;


use Request;
use cardapio\Models\Pedido;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = DB::select('select * from pedidos where status_pedido = false');
        return view('pedidos', ['pedidos' => $pedidos]);
    }

    public function relatorio(){
        $pedidos = DB::select('select * from pedidos where status_pedido = false');
    
        return \PDF::loadView('relatorio', compact('pedidos'))
                    // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                    // ->download('relatorioEstoque.pdf');
                    ->stream();
    }

    public function relatorioMensal(){
        $mes = Request::input('mes', 11);
        $pedidos = DB::select("SELECT nome_pedido ,
        COUNT(*) AS 'numero_pedido',local_pedido , pagamento_pedido 
        FROM pedidos WHERE MONTH(data_pedido) =  ? GROUP BY nome_pedido", [$mes]);
       
        
        return \PDF::loadView('relatorioMensal', compact('pedidos'))
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        // ->download('relatorioEstoque.pdf');
        ->stream();
    }

    public function mensalidade(){
        
        return view('mensal');
    }

    public function show(){
        $nome = Request::input('nome');
        $mes = Request::input('mes');

        $pedidos = DB::select('SELECT * FROM pedidos WHERE nome_pedido = ? AND MONTH(data_pedido)= ?', [$nome, $mes]);
        

        return view('mensal', ['pedidos' => $pedidos]);
  

    }
}
