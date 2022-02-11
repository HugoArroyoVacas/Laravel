<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadoresController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [EquipoController::class,'listadoEquipos'])->middleware(['auth'])->name('dashboard');

Route::get('/listadoEquipos/{id}', [JugadoresController::class,'listadoJugEquipos'])->middleware(['auth'])->name('listadoEquipos');

Route::get('/crearEquipo', [EquipoController::class,'formCrear'])->middleware(['auth'])->name('crearEquipo');
Route::post('/crearEquipo', [EquipoController::class,'guardar'])->middleware(['auth']);

Route::get('/crearJugador', [JugadoresController::class,'formCrear'])->middleware(['auth'])->name('crearJugador');
Route::post('/crearJugador', [JugadoresController::class,'guardar'])->middleware(['auth']);


Route::get('/borrarEquipos/{id}', [EquipoController::class,'borrarEquipo'])->middleware(['auth'])->name('borrarEquipos');

Route::get('/modificarEquipos/{id}', [EquipoController::class,'modificarEquipos'])->middleware(['auth'])->name('modificarEquipos');
Route::post('/modificarEquipos/{id}', [EquipoController::class,'modificarEquiposEnBD'])->middleware(['auth'])->name('modificarEquiposEnBD');


Route::get('/borrarJugadores/{id}', [JugadoresController::class,'borrarJugadores'])->middleware(['auth'])->name('borrarJugadores');

Route::get('/modificarJugadores/{id}', [JugadoresController::class,'modificarJugadores'])->middleware(['auth'])->name('modificarJugadores');
Route::post('/modificarJugadores/{id}', [JugadoresController::class,'modificarJugadoresEnBD'])->middleware(['auth'])->name('modificarJugadoresEnBD');

require __DIR__.'/auth.php';
