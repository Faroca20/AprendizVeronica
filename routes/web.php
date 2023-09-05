<?php

use App\Models\Asesor;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/asesors',AsesorController::class); //Crea 7 rutas para el CRUD de asesor
Route::resource('/clientes',ClienteController::class); //Crea 7 rutas para el CRUD de cliente
Route::get('/', function () {
    return view('app');
});
