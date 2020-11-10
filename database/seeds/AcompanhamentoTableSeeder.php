<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AcompanhamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Arroz a Grega'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Arroz Branco'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Arroz Integral'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Arroz Primavera'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Farofa Simples'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Feijão Preto'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Feijão Branco'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Feijão Mulato'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Purê de Batata'));
        DB::insert('insert into acompanhamentos (name)
        values (?)',
        array('Macarrão'));
    }
}
