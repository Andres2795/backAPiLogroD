<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\PersonaController;
use App\Models\persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('persona',[PersonaController::class,'index']);
Route::post('persona',[personaController::class,'store']);
Route::get('medicos',[personaController::class,'medicosDisponibles']);


Route::get('cita',[CitaController::class,'mostrarCitas']);
Route::post('cita/save',[CitaController::class,'reservarCita']);