  
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
                    <a class="navbar-brand" href="">
                        Cardapio
                    </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="/pratos">
                        Pratos
                    </a></li>
                    <li><a href="pratos2">
                        Pratos Saudaveis
                    </a></li>
                    <li><a href="/acompanhamentos">
                        Acompanhamentos
                    </a></li>
                    <li><a href="/pedidos">
                        Pedidos
                    </a></li>
                    <li><a href="/pedidos/mensal">
                        Mensalidade
                    </a></li>
                    <li><a href="/logout">
                        Sair
                    </a></li>
                    </ul>

            </div>
        </nav>
        @yield('conteudo')

    </div>
</body>
</html>