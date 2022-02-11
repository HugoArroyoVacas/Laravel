<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class operaciones extends Controller{
    //suma
	public function suma($op1,$op2){
		$res = $op1+$op2;
		return view('resultado',['resul'=>$res, 'oper'=>'suma']);
	}
    //resta
	public function resta($op1,$op2){
		$res = $op1-$op2;
		return view('resultado',['resul'=>$res, 'oper'=>'resta']);
	}
    //multiplicacion
	public function multiplicacion($op1,$op2){
		$res = $op1*$op2;
		return view('resultado',['resul'=>$res, 'oper'=>'multiplicacion']);
	}
    //division
	public function division($op1,$op2){
		$res = $op1/$op2;
		return view('resultado',['resul'=>$res, 'oper'=>'division']);
	}

	//operacion
	public function operacion(Request $datosForm){
		$res = 0;
		$op = "";
		switch ($datosForm->operacion) {
			case 'sum':
				$res = $datosForm->oper1 + $datosForm->oper2;
				$op = "Suma";
				break;

			case 'res':
				$res = $datosForm->oper1 - $datosForm->oper2;
				$op = "Resta";
				break;
			
			case 'mul':
				$res = $datosForm->oper1 * $datosForm->oper2;
				$op = "Multiplicación";
				break;

			case 'div':
				$res = $datosForm->oper1 / $datosForm->oper2;
				$op = "División";
				break;
		}
		return view("resultado",["resul"=>$res, "oper"=>$op]);
	}

}
