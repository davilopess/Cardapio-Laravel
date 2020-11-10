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
    }
}
