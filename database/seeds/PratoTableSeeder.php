<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PratoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Carne acebolada', 1));
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Carne cozida', 1));
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Frango trinchado', 1));
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Peixe', 1));
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Lasanha', 1));
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Panqueca', 1));

        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Frango Grelhado (Arroz integral, feijão, legumes a vapor, alface, chips e torta vegetariana)', 2));
        DB::insert('insert into pratos (name,type)
            values (?,?)',
            array('Salada La predileta a moda tropical com frango trinchado e granola', 2));
    }
}
