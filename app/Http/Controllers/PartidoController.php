<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class PartidoController extends Controller
{
    public function crear(){
    	return view('formPartido',['listaEquipos' => Equipo::All()]);
    }
    public function modifClasificacion(Request $datosPartido){

    	//buscar el modelo del equipo1
    	$equipo1 = Equipo::find($datosPartido->equipo1);

    	//buscar el modelo del equipo2
    	$equipo2 = Equipo::find($datosPartido->equipo2);

    	//modificar los goles del equipo1
    	$equipo1->sg = $equipo1->sg + $datosPartido->sg1;
    	$equipo1->sg = $equipo1->sg - $datosPartido->sg2;
    	//modificar los goles del equipo2
    	$equipo2->sg = $equipo2->sg + $datosPartido->sg2;
    	$equipo2->sg = $equipo2->sg - $datosPartido->sg1;


    	if ($equipo->id != $equipo2->id) {
    		if ($datosPartido->sgl > $datosPartido->sg2) {
    			//tres puntos para el equipo 1
    			$equipo1->puntos += 3; 
    		}elseif ($datosPartido->sg2 > $datosPartido->sg1) {
    			//tres puntos para el equipo 2
    			$equipo2->puntos += 3; 
    		}else{
    			//un punto para cada uno
    			$equipo1->puntos += 1; 
    			$equipo2->puntos += 1; 
    		}
    	}

    	//salvar el equipo1
    	$equipo1->save();
    	//salvar el equipo2
    	$equipo2->save();

    	return redirect()->route('clasificacion');
    }
}
