<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inicio\reporteventaController;



Route::get('',[reporteventaController::class, 'reporteventa']);


//Route::get('',[reportepersonasController::class, 'fabricante']);

Route::get('/crear',[reporteventaController::class, 'crear']);
Route::get('/editar',[reporteventaController::class, 'editar']);
Route::post('/agregar',[reporteventaController::class, 'insertar']);


//////nuevas para put*/
Route::get('/actualizalo/{COD_ROL}',[reporteventaController::class,'datosparaactualizar']);
Route::put('/actualizar',[reporteventaController::class, 'actualizar'])->name('actualizar'); //cambiar a metodo put

//Route::get('',[HomeController::class, 'enproduccion']);

//////nuevas para delete*/
Route::delete('/eliminar/{id}',[reporteventaController::class,'eliminar'])->name('eliminare.eliminare');