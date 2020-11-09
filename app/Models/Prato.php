<?php

namespace cardapio\Models;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $table = 'pratos';
    protected $fillable = array('name',
    'type');
}
