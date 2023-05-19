<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\GerenciarPontuacaoController;
use App\Http\Controllers\ProgramaResidenciaMedicaController;
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


Route::post('/programas-residencia-medica', [ProgramaResidenciaMedicaController::class, 'salvarPrm'])->name('programas-residencia-medica.salvarPrm');
Route::get('/programas-residencia-medica/{id}', [ProgramaResidenciaMedicaController::class, 'buscarPrm'])->name('programas-residencia-medica.buscarPrm');
Route::get('/programas-residencia-medica', [ProgramaResidenciaMedicaController::class, 'buscarTodosPrm'])->name('programas-residencia-medica.buscarTodosPrm');
Route::put('/programas-residencia-medica/{id}', [ProgramaResidenciaMedicaController::class, 'atualizarPrm'])->name('programas-residencia-medica.atualizarPrm');
Route::delete('/programas-residencia-medica/{id}', [ProgramaResidenciaMedicaController::class, 'excluirPrm'])->name('programas-residencia-medica.excluirPrm');

Route::post('/gerenciar-pontuacao', [GerenciarPontuacaoController::class, 'salvarPontuacao'])->name('gerenciar-pontuacao.salvarPontuacao');
Route::get('/gerenciar-pontuacao/{id}', [GerenciarPontuacaoController::class, 'buscarPontuacao'])->name('gerenciar-pontuacao.buscarPontuacao');
Route::get('/gerenciar-pontuacao', [GerenciarPontuacaoController::class, 'buscarTodosPontuacoes'])->name('gerenciar-pontuacao.buscarTodosPontuacoes');
Route::put('/gerenciar-pontuacao/{id}', [GerenciarPontuacaoController::class, 'atualizarPontuacao'])->name('gerenciar-pontuacao.atualizarPontuacao');
Route::delete('/gerenciar-pontuacao/{id}', [GerenciarPontuacaoController::class, 'excluirPontuacao'])->name('gerenciar-pontuacao.excluirPontuacao');


Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
