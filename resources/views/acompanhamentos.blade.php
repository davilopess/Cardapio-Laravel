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
    <table class="table table-striped table-hover">
        @foreach ($acompanhamentos as $a)
        <tr  class="">
            <td>{{$a->name}}</td>

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

@stop