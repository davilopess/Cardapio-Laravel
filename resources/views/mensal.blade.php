@extends('principal')

@section('conteudo')


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <!-- <h1>Listagem de produtos</h1> -->
        <a class="btn btn-success" href="{{action('PedidoController@relatorioMensal')}}">
                            Baixar Lista Mensal<span class="material-icons" style="color:white;">download</span>
        </a>

    </div>
    <form class="container-add" action="{{action('PratoController@create2')}} " method="post">
        <input type="hidden"
            name="_token" value="{{{ csrf_token() }}}" />
        <input name="type" type="hidden" value="2">
        <input name="name" type="text" class="form-control" placeholder="Adicione um prato">
        <button type="submit" class="btn btn-lg btn-primary"><i class=material-icons>add</i></button>
    </form>

    


<style>
    .container-add{
        display: flex;
        align-items: center;

    }
    


</style>

@stop