  
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    
    <title>Cardapio</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- <img src="{!! asset('imagens/gpdimensao.svg') !!}"> -->
                    <a class="navbar-brand" href="">
                        Cardapio
                    </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{action('PratoController@index')}}">
                        Pratos
                    </a></li>
                    <li><a href="{{action('PratoController@index2')}}">
                        Pratos Saudaveis
                    </a></li>
                    <li><a href="{{action('AcompanhamentoController@index')}}">
                        Acompanhamentos
                    </a></li>
                    <li><a href="{{action('PedidoController@index')}}">
                        Pedidos
                    </a></li>
                    <li><a href="{{action('PedidoController@mensalidade')}}">
                        Mensalidade
                    </a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>

            </div>
        </nav>
        @yield('conteudo')

    </div>
</body>
</html>