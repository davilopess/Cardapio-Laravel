<h1>Pedidos do mês de Novembro</h1>
    <table class="table table-striped table-hover">
    <tr>
            <th>Nome</th>
            <th>Numero de Pedidos</th>
            <th>Local</th>
            <th>Pagamento</th>

        </tr>
        @foreach ($pedidos as $p)
        <tr  class="">
            <td>{{$p->nome_pedido}}</td>
            <td>{{$p->numero_pedido}}</td>
            <td>{{$p->local_pedido}}</td>
            <td>{{$p->pagamento_pedido}}</td>


            <!-- <td>
                <a href="">
                    <span class="material-icons">edit</span>
                </a>
            </td> -->
            <td>

        @endforeach
    </table>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>