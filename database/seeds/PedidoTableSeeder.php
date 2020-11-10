<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Davi Lopes', 'Dimensao', 'Frango','Arroz Branco/Macarrao',
            'Dinheiro', false, '2020-11-09'));

        DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Djair', 'Dimensao', 'Cozidao','Arroz Branco/Macarrao/Salada',
            'Mensalista', false, '2020-11-09'));

            DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Edna', 'Dimensao', 'Macarronada','',
            'Dinheiro', false, '2020-11-09'));

            DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Geanderson', 'Dimensao', 'Carne acebolada','Pure de batata/Arroz Branco/ Salada verde',
            'Mensalista', false, '2020-11-09'));

            DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Daysa', 'Dimensao', 'Panqueca','Pure de batata/Arroz Branco/ Salada verde',
            'Dinheiro', false, '2020-11-09'));

            DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Isaac', 'Dimensao', 'Peixe','Pure de batata/Salada verde',
            'Dinheiro', false, '2020-11-09'));

            DB::insert('insert into pedidos
            (nome_pedido,local_pedido, prato_pedido, acompanhamento_pedido, pagamento_pedido,
            status_pedido, data_pedido)
            values (?,?,?,?,?,?,?)',
            array('Yan', 'Dimensao', 'Coxa de frango','Macarrao/Salada verde',
            'Dinheiro', false, '2020-11-09'));
    }
}
