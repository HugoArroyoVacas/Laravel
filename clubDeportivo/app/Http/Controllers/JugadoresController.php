<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugadores;
use App\Models\equipo;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Auth;

class JugadoresController extends Controller
{
    public function listadoJugEquipos(Request $datos){
    	//sacar datos a través del id del equipo seleccionado sin usar el modelo
    	$jugadores = jugadores::where('equipo_id', $datos->id)->get();

    	//sacar datos a través del id del equipo seleccionado usando el modelo equipo  (hay que modificarlo para que funcione corerctamente)
    	//$jugadores2 = equipo::find($datos)->jugadores();

    	return view('/listadoEquipos',['listadoJugEquipos' => $jugadores]);
    }

    public function formCrear(){
    	return view('formularioCrearJugador',['jugadores' => Jugadores::All()]);
    }

    public function guardar(Request $datos){
    	
    	//validar
		$datos->validate([
    		'nombre' => 'required',
    		'edad' => 'required|numeric'
    	]);
    	//crear modelo
		$jugad = new jugadores();

		$jugad->nombre = $datos->nombre;
		$jugad->edad = $datos->edad;
		$jugad->equipo_id = $datos->equipo_id;

    	//guardar en BD
		$jugad->save();
    	//redirección con parametro equipo_id
    	return redirect()->route('listadoEquipos', ['id' => $datos->equipo_id]);
    }

    public function borrarJugadores($id){
        $jugador = Jugadores::find($id);
        $e = $jugador->equipo_id;

        $jugador->delete();

        return redirect('/listadoEquipos/'.$e);
    }

    public function modificarJugadores($id){
        $j = Jugadores::find($id);

        return view('formularioCrearJugador',['jugadores'=>$j]);
    }
    public function modificarJugadoresEnBD(Request $datos, $id){
        $j = Jugadores::find($id);

        $j->nombre = $datos->nombre;
        $j->edad = $datos->edad;
        $j->equipo_id = $datos->equipo_id;

        $j->save();

        return view('/formularioCrearJugador',['listadoEquipos' => $lj]);
    }
}
