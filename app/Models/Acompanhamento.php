<?php

namespace cardapio\Models;

use Illuminate\Database\Eloquent\Model;

class Acompanhamento extends Model
{
    public $timestamps = false;
    protected $fillable = array('name');
}
