<?php

namespace cardapio\Models;

use Illuminate\Database\Eloquent\Model;
use Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Pedido extends Model
{
    protected $table = 'pedidos';
    public $timestamps = false;
    protected $fillable = array( 'data_pedido', 'local_pedido', 'nome_pedido', 'prato_pedido','pagamento_pedido','acompanhamento_pedido',
    'status_pedido');

    public static function remove($id){
        return DB::select('delete from pedidos where id_pedido = ?', [$id]);
    }

    public static function dateAddHours($hours = 8){
        $carbon_date = Carbon::parse(Carbon::now()->timezone('America/Sao_Paulo'));
        $carbon_date->addHours($hours);
        return $carbon_date->toDateString();
    }
}
