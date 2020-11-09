<?php

namespace cardapio\Http\Controllers;

use Illuminate\Http\Request;
use cardapio\Models\Acompanhamento;

class AcompanhamentoController extends Controller
{
    public function index(){
        $acompanhamentos = Acompanhamento::all();
        return view('acompanhamentos', ['acompanhamentos' => $acompanhamentos]);
    }
}
