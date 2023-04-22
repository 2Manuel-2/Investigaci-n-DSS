<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::controller(PersonaController::class)->group(function (){
    Route::get('/personas','index');
    Route::post('/personas','store');
    Route::put('/personas/{id}','update');
    Route::patch('/personas/{id}','update');
    Route::delete('/personas/{id}','destroy');
    Route::get('/personas/{id}','show');


});

