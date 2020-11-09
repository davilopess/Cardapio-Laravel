@extends('principal')

@section('conteudo')


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container-topo">
        <!-- <h1>Listagem de produtos</h1> -->
    </div>
    <form class="container-add" action="{{action('PratoController@create2')}} " method="post">
        <input type="hidden"
            name="_token" value="{{{ csrf_token() }}}" />
        <input name="type" type="hidden" value="2">
        <input name="name" type="text" class="form-control" placeholder="Adicione um prato">
        <button type="submit" class="btn btn-lg btn-primary"><i class=material-icons>add</i></button>
    </form>
    <table class="table table-striped table-hover">
        @foreach ($pratos as $p)
        <tr  class="">
            <td>{{$p->name}}</td>

            <!-- <td>
                <a href="">
                    <span class="material-icons">edit</span>
                </a>
            </td> -->
            <td>
                <a href="{{action('PratoController@destroy2', $p->id)}}">
                    <span class="material-icons">delete</span>
                </a>
            </td>
        </tr>

        @endforeach
    </table>


<style>
    .container-add{
        display: flex;
        align-items: center;

    }
</style>

@stop