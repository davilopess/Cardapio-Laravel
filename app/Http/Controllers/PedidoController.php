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
        $pedidos = Pedido::all();
    
        return \PDF::loadView('relatorio', compact('pedidos'))
                    // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                    // ->download('relatorioEstoque.pdf');
                    ->stream();
    }
}
