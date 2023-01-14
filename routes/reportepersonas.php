<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inicio\reportepersonasController;



//Route::get('',[reportepersonasController::class, 'index']);


Route::get('',[reportepersonasController::class, 'reportepersonas']);


////nuevas para post */
Route::get('/crear',[reportepersonasController::class, 'crear']);
Route::get('/editar',[reportepersonasController::class, 'editar']);
Route::post('/agregar',[reportepersonasController::class, 'insertar']);


//////nuevas para put*/
Route::get('/actualizalo/{COD_ROL}',[reportepersonasController::class,'datosparaactualizar']);
Route::put('/actualizar',[reportepersonasController::class, 'actualizar'])->name('actualizar'); //cambiar a metodo put

//Route::get('',[HomeController::class, 'enproduccion']);

//////nuevas para delete*/
Route::delete('/eliminar/{id}',[reportepersonasController::class,'eliminar'])->name('eliminarp.eliminarp');