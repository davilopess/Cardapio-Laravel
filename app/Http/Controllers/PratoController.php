<?php

namespace cardapio\Http\Controllers;

use Request;
use cardapio\Models\Prato;
use Illuminate\Support\Facades\DB;

class PratoController extends Controller
{
    
    public function index(){
        $pratos = DB::select('select * from pratos where type = 1');
        return view('pratos', ['pratos' => $pratos]);
    }

    public function index2(){
        $pratos_saudaveis = DB::select('select * from pratos where type = 2');
        return view('pratos-saudaveis', ['pratos' => $pratos_saudaveis]);
    }

    public function create(){
        Prato::create(Request::all());
        return redirect()
            ->action('PratoController@index');
            
    }
    public function create2(){
        Prato::create(Request::all());
        return redirect()
            ->action('PratoController@index2');
            
    }
}
