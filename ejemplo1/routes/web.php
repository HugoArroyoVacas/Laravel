<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta de tipo vsita, /ruta1 -> /covid/valdemoro
Route::view('/covid/valdemoro','entrada');

Route::get('/ruta2', function(){
	return "Hola ruta 2";
});

Route::get('/ruta3',function(){
	return view("formulario");
});

Route::view('/ruta4','resFormulario');

//ejemplo de ruta con una variable
Route::get('/ruta5/{var1}',function($var1){
	return $var1;
});