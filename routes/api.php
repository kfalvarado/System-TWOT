<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('Ventas','App\Http\Controllers\VentasController@index');
//Route::get('Ventas',[VentasController::class,'index']);
Route::post('/ventas/agregar','App\Http\Controllers\VentasController@store');
Route::put('/ventas/actualizar/{id}','App\Http\Controllers\VentasController@update');
Route::delete('/ventas/borrar/{id}','App\Http\Controllers\VentasController@destroy');


