<?php

namespace cardapio\Models;

use Illuminate\Database\Eloquent\Model;
use Request;
use Illuminate\Support\Facades\DB;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = array('nome_pedido','local_pedido', 'prato_pedido', 'acompanhamento_pedido','pagamento_pedido',
    'status_pedido', 'data_pedido');

    public static function remove($id){
        return DB::select('delete from pedidos where id_pedido = ?', [$id]);
    }
}
