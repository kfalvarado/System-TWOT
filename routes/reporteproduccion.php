<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inicio\reporteproduccionController;



Route::get('',[reporteproduccionController::class, 'reporteproduccion']);


//Route::get('',[reportepersonasController::class, 'fabricante']);


////nuevas para post */
Route::get('/crear',[reporteproduccionController::class, 'crear']);
Route::get('/editar',[reporteproduccionController::class, 'editar']);
Route::post('/agregar',[reporteproduccionController::class, 'insertar']);


//////nuevas para put*/
Route::get('/actualizalo/{COD_ARTICULO}',[reporteproduccionController::class,'datosparaactualizar']);
Route::put('/actualizar',[reporteproduccionController::class, 'actualizar'])->name('actualizar'); //cambiar a metodo put

//Route::get('',[HomeController::class, 'enproduccion']);

//////nuevas para delete*/
Route::delete('/eliminar/{id}',[reporteproduccionController::class,'eliminar'])->name('eliminarf.eliminarf');