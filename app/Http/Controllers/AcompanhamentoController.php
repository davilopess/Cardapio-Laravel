<?php

namespace cardapio\Http\Controllers;

use Request;
use cardapio\Models\Acompanhamento;

class AcompanhamentoController extends Controller
{
    
    public function index(){
        $acompanhamentos = Acompanhamento::orderBy('name')->get();
        return view('acompanhamentos', ['acompanhamentos' => $acompanhamentos]);
    }

    public function create(){
        Acompanhamento::create(Request::all());
        return redirect()
            ->action('AcompanhamentoController@index');
            
    }

    public function destroy($id){
        $acompanhamento = Acompanhamento::find($id);
        $acompanhamento->delete();

        return redirect()
            ->action('AcompanhamentoController@index');
    }
}