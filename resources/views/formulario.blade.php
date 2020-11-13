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
            <span>Pedido referente a data 12/11/2020</span>
        </div>
        <form action="">
            <section>
                <span>Empresa</span>
                <div container-checkbox>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Dimensão</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Diretoria</label>
                    </div>
                </div>

            </section>
            <section>
                <span>Nome</span>
                <input class="form-control w-75" name="nome_pedido" type="text">
            </section>
            <section>
                <span>Prato Principal</span>
                <input class="form-control w-75" name="prato_pedido" type="text">
            </section>
            <section>
                <span>Prato Fitness</span>
                <select class="form-control w-75" name="prato_pedido" type="text">
                    <option value="">Selecione um prato</option>
                </select>
            </section>
            <section>
                <span>Acompanhamentos</span>
                
                <div container-checkbox>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">Arroz Branco</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">Pure de batata</label>
                    </div>
                </div>
            </section>
            <section>
                <span>Observação</span>
                <input class="form-control w-75" name="" type="text">
            </section>
            <section>
                <span>Forma de Pagamento</span>
                <div check container-checkbox>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">Dimensão</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label" for="customCheck6">Diretoria</label>
                    </div>
                </div>
            </section>
            <hr style="border-top: 1px solid rgb(255 255 255 /510%);"/>
            <button type="button" class="btn btn-outline-light w-25">Enviar</button>
        </form>
    </div>
    <img style="width: 500px; height: 500px; position: fixed; margin-top: 110px; right: 10px " src="/imagens/cozinha.png" alt="">
</body>
<style>
    body {
        background-image: linear-gradient(to right, #20a5c7, #75c4bc);
        
        font-family: 'Roboto', sans-serif;
        color: white;
        display: flex;
        justify-content: space-between;
        
        
    }
    .pedido{
        margin: 30px 100px;
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