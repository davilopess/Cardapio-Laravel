

<h1>Listagem de pedidos</h1>
    <table class="table table-striped table-hover">
    <tr>
            <th>Nome</th>
            <th>Local/th>
            <th>Prato</th>
            <th>Acompanhamento</th>
            <th>Pagamento</th>
            <th>Data</th>
        </tr>
        @foreach ($pedidos as $p)
        <tr  class="">
            <td>{{$p->nome_pedido}}</td>
            <td>{{$p->local_pedido}}</td>
            <td>{{$p->prato_pedido}}</td>
            <td>{{$p->acompanhamento_pedido}}</td>
            <td>{{$p->pagamento_pedido}}</td>
            <td>{{$p->data_pedido}}</td>

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