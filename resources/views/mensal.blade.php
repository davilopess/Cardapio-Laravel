@extends('principal')

@section('conteudo')


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <div>
        <form class="container-mensal" action="{{action('PedidoController@relatorioMensal')}} " method="post">
            <input type="hidden"
                name="_token" value="{{{ csrf_token() }}}" />

            <!-- <button type="submit" class="btn btn-lg btn-primary"><i class=material-icons>add</i></button> -->
            <select name="mes" type="numeric" class="form-control form-control-lg">
                <option selected disabled>Selecione o mês</option>
            @for ($i = 1; $i < 13; $i++)
                <option value="{{ $i }}">{{ $i }}</option>

            @endfor
            </select>
            <button type= "submit" class="btn btn-success" >
                Baixar Lista Mensal<span class="material-icons" style="color:white;">download</span>
            </button>
        </form>
        <form class="container-mensal" action="{{action('PedidoController@show')}} " method="post">
            <input type="hidden"
                name="_token" value="{{{ csrf_token() }}}" />
            
            <input name="nome" value= "{{ old('nome') }}" type="text" class="form-control" placeholder="Informe o Nome">
            <!-- <button type="submit" class="btn btn-lg btn-primary"><i class=material-icons>add</i></button> -->
            
            <select name="mes" type="numeric" class="form-control form-control-lg">
                <option selected disabled>Selecione o mês</option>
            @for ($i = 1; $i < 13; $i++)
                <option value="{{ $i }}">{{ $i }}</option>

            @endfor
            </select>
            <button type= "submit" class="btn btn-success" >
                <span class="material-icons" style="color:white;">search</span>
            </button>
        </form>
        @if(!(empty($pedidos)))
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

        </tr>

        @endforeach
    </table>
        @endif
    </div>

    


<style>
    .container-mensal{
        display: flex;
        align-items: center;
        background: white;
        justify-content: space-between;
        
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        /* width: 39%; */
        border-radius: 8px;
        padding: 15px;
    }

    .container-mensal button{
        display:flex;
        align-items: center;
        font-family: Raleway;
        font-weight: bold;
        text-decoration:none;
        color: white;
    }
    


</style>

@stop