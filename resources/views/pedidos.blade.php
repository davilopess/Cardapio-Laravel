@extends('principal')

@section('conteudo')


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <form action="{{action('PedidoController@index')}}" method="get">
            <input name="data" class="form-control" type="text"
                 style="margin-bottom: -6px; width: 95px;" value="{{$dataRequest}}">
            
            <button hidden type="submit"></button>
        </form>
        <a class="btn btn-success" href="{{action('PedidoController@relatorio', $dataRequest)}}">
                                Baixar Lista de Pedidos<span class="material-icons" style="color:white;">download</span>
        </a>
    </div>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nome</th>
            <th>Local</th>
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
            
            

            <td>
                <a href="">
                    <span class="material-icons">edit</span>
                </a>
            </td>
            <td>
                <a href="{{action('PedidoController@destroy', $p->id_pedido)}}">
                    <span class="material-icons">delete</span>
                </a>
            </td>
        </tr>

        @endforeach
    </table>
    @if(empty($pedidos))
    <div class="alert alert-danger">
        Sem pedidos cadastrados.
    </div>
    @endif

<style>
    .container-add{
        display: flex;
        align-items: center;

    }
    
    .container-topo{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 3px;
    }
    .container-topo a{
        display:flex;
        align-items: center;
        font-family: Raleway;
        font-weight: bold;
        text-decoration:none;
        color: white;
    }

</style>

@stop