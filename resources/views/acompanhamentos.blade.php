@extends('principal')

@section('conteudo')

@if(empty($acompanhamentos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
@else
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <!-- <h1>Listagem de produtos</h1> -->
    </div>
    
        <form class="container-add" action="{{action('AcompanhamentoController@create')}} " method="post">
            <input type="hidden"
                name="_token" value="{{{ csrf_token() }}}" />
            <input name="name" type="text" class="form-control" placeholder="Adicione um acompanhamento">
            <button type="submit" class="btn btn-lg btn-primary"><i class=material-icons>add</i></button>
        </form>
    
    <table class="table table-striped table-hover">
        @foreach ($acompanhamentos as $a)
        <tr  class="">
            <td>{{$a->name}}</td>

            <!-- <td>
                <a href="">
                    <span class="material-icons">edit</span>
                </a>
            </td> -->
            <td>
                <a href="{{action('AcompanhamentoController@destroy', $a->id)}}">
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