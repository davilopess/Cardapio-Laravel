<?php

namespace cardapio\Http\Controllers;

use Illuminate\Http\Request;
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
        $pedidos = DB::select("SELECT nome_pedido ,
        COUNT(*) AS 'numero_pedido',local_pedido , pagamento_pedido 
        FROM pedidos WHERE MONTH(data_pedido) = 11 GROUP BY nome_pedido");
        print_r($pedidos);
        // return view('mensal', ['pedidos' => $pedidos]);
        return \PDF::loadView('relatorioMensal', compact('pedidos'))
        // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
        // ->download('relatorioEstoque.pdf');
        ->stream();
    }

    public function mensalidade(){
        
        return view('mensal');
    }
}
