<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $categ = array('sub10','sub12','sub14');

        for ($i=1; $i <= 10; $i++) { 
            DB::table('equipos')->insert([
                'nombre' => 'equipo '.$i,
                'entrenador' => Str::random(10),
                'categoria' => $categ[rand(0,2)]
            ]);
        }
    }
}
