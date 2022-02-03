<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
        	'nombre' => 'Grupo Egido Pinto',
        	'puntos' => 0,
        	'sg' => 0,
        	'sp' => 0
        ]);
        DB::table('equipos')->insert([
        	'nombre' => 'Almería VP',
        	'puntos' => 0,
        	'sg' => 0,
        	'sp' => 0
        ]);
        DB::table('equipos')->insert([
        	'nombre' => 'Leganés VP',
        	'puntos' => 0,
        	'sg' => 0,
        	'sp' => 0
        ]);
        DB::table('equipos')->insert([
        	'nombre' => 'Grupo VPMadrid',
        	'puntos' => 0,
        	'sg' => 0,
        	'sp' => 0
        ]);
    }
}
