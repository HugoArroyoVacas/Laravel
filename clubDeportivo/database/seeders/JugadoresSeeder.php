<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $edades = array(10,11,12,13,14);

        for ($i=1; $i <=10 ; $i++) { 
            for ($j=1; $j <=12 ; $j++) { 
                DB::table('jugadores')->insert([
                    'nombre' => 'Jugador '.$i.'-'.$j,
                    'edad' => $edades[rand(0,4)],
                    'equipo_id' => $i
                ]);
            }
        }
    }
}
