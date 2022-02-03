<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function clasificacion(){

    	$equipos = Equipo::All()->sortByDesc('puntos'); //select * from equipos order by puntos

    	return view('clasificacion',['listaEquipos' => $equipos]);
    }
    public function crearEquipo(){
    	return view('formCrear');
    }
    public function guardar(Request $datosForm){
    	//validar los datos
        
    	//crear el equipo nuevo
    	$equipo = new Equipo();

    	$equipo->nombre = $datosForm->nombre;
    	$equipo->puntos = $datosForm->puntos;
    	$equipo->sg = $datosForm->sg;
    	$equipo->sp = $datosForm->sp;

    	//guardar en la base de datos
    	$equipo->save();

    	//devolver la vista clasificación
    	$equipos = Equipo::All()->sortByDesc('puntos');

    	return view('clasificacion',['listaEquipos' => $equipos]);

    }
}
