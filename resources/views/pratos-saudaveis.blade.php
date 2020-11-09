@extends('principal')

@section('conteudo')

@if(empty($pratos))
    <div class="alert alert-danger">
        Você não tem nenhum produto cadastrado.
    </div>
@else
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <!-- <h1>Listagem de produtos</h1> -->
    </div>
    <div class="container-add">
        <input type="text" class="form-control" placeholder="Adicione um prato">
        <button type="submit" class="btn btn-lg btn-primary"><i class=material-icons>add</i></button>
    </div>
    <table class="table table-striped table-hover">
        @foreach ($pratos as $p)
        <tr  class="">
            <td>{{$p->name}}</td>

            <td>
                <a href="">
                    <span class="material-icons">edit</span>
                </a>
            </td>
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