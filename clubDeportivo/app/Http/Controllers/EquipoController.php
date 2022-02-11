<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jugadores;
use App\Models\equipo;
use App\Http\Controllers\JugdaoresController;
use Illuminate\Support\Facades\Auth;

class EquipoController extends Controller
{
    public function listadoEquipos(){
    	$equipos = equipo::All();

    	return view('/dashboard',['listadoEquipos' => $equipos]);
    }

    public function formCrear(){
    	return view('formularioCrearEquipo');
    }

    public function guardar(Request $datos){
    	$datos->validate([
    		'nombre' => 'required|max:100',
    		'entrenador' => 'required|max:100',
    		'categoria' => 'required|max:100'
    	]);

    	$equipo = new Equipo();

    	$equipo->nombre = $datos->nombre;
    	$equipo->entrenador = $datos->entrenador;
    	$equipo->categoria = $datos->categoria;

    	$equipo->save();

    	return redirect()->route('dashboard', ['listadoEquipos' => Equipo::All()]);
    }

    public function borrarEquipo($id){
        $e = Equipo::find($id);

        

        $e->delete();

        return view('/dashboard',['listaEquipos' => $lp]);
    }
    public function modificarEquipos($id){
        $e = Equipo::find($id);

        return view('formularioCrearEquipo',['equipo'=>$e]);
    }
    public function modificarEquiposEnBD(Request $datos, $id){
        $e = Equipo::find($id);

        $e->nombre = $datos->nombre;
        $e->entrenador = $datos->entrenador;
        $e->categoria = $datos->categoria;

        $e->save();

        return view('/formularioCrearEquipo',['listadoEquipos' => $lp]);
    }
}
