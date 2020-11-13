<?php

namespace cardapio\Http\Controllers;

use Carbon\Carbon;
use Request;
use cardapio\Models\Pedido;
use cardapio\Models\Prato;
use cardapio\Models\Acompanhamento;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index(){
        $data = Pedido::dateAddHours();

        $dataRequest = Request::input('data', $data);
        $pedidos = DB::select('select * from pedidos where data_pedido = ?', [$dataRequest]);
        
        return view('pedidos', ['pedidos' => $pedidos, 'dataRequest' => $dataRequest]);
    }

    public function relatorio($data){
        $pedidos = DB::select('select * from pedidos where data_pedido = ?', [$data]);
    
        return \PDF::loadView('relatorio', compact('pedidos'))
                    // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                    // ->download('relatorioEstoque.pdf');
                    ->stream();
    }

    public function relatorioMensal(){
        $mes = Request::input('mes', 11);
        $pedidos = DB::select("
            SELECT nome_pedido ,
            COUNT(*) AS 'numero_pedido',local_pedido , pagamento_pedido, COUNT(*)*12.00 AS 'total_pedido'
            FROM pedidos 
            WHERE MONTH(data_pedido) =  ? 
            GROUP BY nome_pedido 
            ORDER BY nome_pedido", [$mes]);
       
        
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

    public function destroy($id){
        
        $pedido = Pedido::remove($id);
        
        return redirect()->back();
            
    }

    public function formulario (){
        $pratos = DB::select('select * from pratos where type = 1');
        $pratos2 = DB::select('select * from pratos where type = 2');
        $acompanhamentos = Acompanhamento::orderBy('name')->get();
        $data = Pedido::dateAddHours();

        return view('formulario', ['pratos' => $pratos, 'data' => $data,
         'pratos2' => $pratos2, 'acompanhamentos' => $acompanhamentos]);


    }

    public function create(){
        $acompanhamento = Request::only('acompanhamento_pedido');
        $acompanhamentos = implode("/", array_values($acompanhamento)[0]);

    }
}
