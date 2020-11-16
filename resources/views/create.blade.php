<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,200&display=swap" rel="stylesheet">
<body>
    <div class="pedido">

        <div class= "container-header">
            <h1 style="font-family: 'Nunito', sans-serif;
                ">Solicitação de Almoço</h1>
            <span>Pedido referente a data </span>
        </div>
        <div class="container-lista">
            <h1>Nome</h1>
            <span>{{$pedido['nome_pedido']}}</span>

            <h1>Empresa</h1>
            <span>{{$pedido['local_pedido'] }} </span>

            <h1>Prato</h1>
            <span>{{$pedido['prato_pedido'] }}</span>

            <h1>Acompanhamentos</h1>
            <span>{{$pedido['acompanhamento_pedido'] }}</span>

            <h1>Forma de pagamento</h1>
            <span>{{$pedido['pagamento_pedido'] }}</span>
        </div>
    </div>
   
</body>
<style>
    body {
        background-image: linear-gradient(to right, #20a5c7, #75c4bc);
        
        font-family: 'Roboto', sans-serif;
        color: white;
        display: flex;
        justify-content: center;
        
        
    }
    .pedido{
        margin: 30px 50px;
        display: flex;
        padding: 20px;
    
        box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        flex-direction: column;
        width: 700px;
        /* align-items: center; */
    }
    .container-header{

        margin-bottom: 50px;
        display: flex;
        
        flex-direction: column;
        align-items: center;
        
    }
    .container-lista h1{
        font-size: 28px;
        font-weight: bold;
        
    }
    .check {
        margin-right: 500px;
        display: flex;
        flex-direction: row;
        width: 300px
    }
    
    /* form{ 
        padding: 20px;
    
        box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    } */
    section{
        
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: start; 
        margin-left: 120px;
        margin-bottom: 20px;
    }

    section span{
        font-weight: bold;
        margin-bottom: 5px;
    }
</style>
</html>
