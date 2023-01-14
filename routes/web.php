<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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
    return view('index');
    });
/*
Route::get('/', function () {
return view('welcome');
});*/
Route::get('/prueba', function () {
    $client = new client(
        [
            'base_uri'=>'http://localhost:3000',
            'timeout'=> 2.0,
        ]
    );
    $response = $client->request('GET', '/Ventas/leer/1');
    return json_decode($response->getBody()->getcontents());
    //return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
