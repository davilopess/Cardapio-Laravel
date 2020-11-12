<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-pedido">
        <h1>Solicitação de Almoço</h1>
        <span>Pedido referente a data 12/11/2020</span>

        <form action="">
            <section>
                
                <input name="local_pedido" type="checkbox">
            </section>
            <section>
                <input name="nome_pedido" type="text">
            </section>
            <section>
                <select name="prato_pedido" type="text">
                    <option value="">Selecione um prato</option>
                </select>
            </section>
            <section>
                <input name="prato_pedido" type="text">
            </section>
            <section>
                <input name="acompanhamento_pedido" type="checkbox">
            </section>
            <section>
                <input name="pagamento_pedido" type="text">
        </form>
    </div>
</body>
<style>
    body {
        background-image: linear-gradient(to right, #20a5c7, #75c4bc);
        font-family: 'Roboto', sans-serif;
        color: white;
        display: flex;
        
        justify-content: start;
        flex-direction: column;
    }
    .container-pedido{
        margin: 120px;
        display: flex;
        
        flex-direction: column;
    }
</style>
</html>