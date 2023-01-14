<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inicio\reportecompraController;



Route::get('',[reportecompraController::class, 'reportecompra']);


//Route::get('',[reportecompraController::class, 'fabricante']);

////nuevas para post */
Route::get('/crear',[reportecompraController::class, 'crear']);
Route::get('/editar',[reportecompraController::class, 'editar']);
Route::post('/agregar',[reportecompraController::class, 'insertar']);


//////nuevas para put*/
Route::get('/actualizalo/{COD_ROL}',[reportecompraController::class,'datosparaactualizar']);
Route::put('/actualizar',[reportecompraController::class, 'actualizar'])->name('actualizar'); //cambiar a metodo put

//Route::get('',[HomeController::class, 'enproduccion']);

//////nuevas para delete*/
Route::delete('/eliminar/{id}',[reportecompraController::class,'eliminar'])->name('eliminarz.eliminarz');