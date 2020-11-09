@extends('principal')

@section('conteudo')

@if(empty($pedidos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
@else
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <!-- <h1>Listagem de produtos</h1> -->
    </div>

    <table class="table table-striped table-hover">
        <tr>
            <th>Nome</th>
            <th>Local/th>
            <th>Prato</th>
            <th>Acompanhamento</th>
            <th>Pagamento</th>
            <th>Data</th>
        </tr>
        @foreach ($pedidos as $p)
        <tr  class="">
            <td>{{$p->nome_pedido}}</td>
            <td>{{$p->local_pedido}}</td>
            <td>{{$p->prato_pedido}}</td>
            <td>{{$p->acompanhamento_pedido}}</td>
            <td>{{$p->pagamento_pedido}}</td>
            <td>{{$p->data_pedido}}</td>

            <!-- <td>
                <a href="">
                    <span class="material-icons">edit</span>
                </a>
            </td> -->
            <td>
                <a href="">
                    <span class="material-icons">delete</span>
                </a>
            </td>
        </tr>

        @endforeach
    </table>
    
@endif

<style>
    .container-add{
        display: flex;
        align-items: center;

    }
</style>

@stop