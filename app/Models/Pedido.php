<?php

namespace cardapio\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = array('nome_pedido','local_pedido', 'prato_pedido', 'acompanhamento_pedido','pagamento_pedido',
    'status_pedido', 'data_pedido');
}
