<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\ResidenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//criar uma rota para buscar uma atividade por matching de palavra
//Route::get...

Route::get('/atividade/{id}', [AtividadeController::class, 'buscarAtividade'])->name('atividade.buscarAtividade');
Route::post('/atividade', [AtividadeController::class, 'salvarAtividade'])->name('atividade.salvarAtividade');


Route::get('/residentes/{id}', [ResidenteController::class, 'buscarResidente'])->name('residentes.buscarResidente');
Route::get('/residentes', [ResidenteController::class, 'buscarTodos'])->name('residentes.buscarTodos');
Route::post('/residentes', [ResidenteController::class, 'salvarResidente'])->name('residentes.salvarResidente');
Route::put('/residentes/{id}', [ResidenteController::class, 'atualizarResidente'])->name('residentes.atualizarResidente');

Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
