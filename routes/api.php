<?php

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

//criar uma rota para buscar uma atividade por matching de palavra
//Route::get...

Route::get('/atividade/{id}', 'App\Http\Controllers\AtividadeController@buscarAtividade')->name('atividade.buscarAtividade');

Route::post('/atividade', 'App\Http\Controllers\AtividadeController@salvarAtividade')->name('atividade.salvarAtividade');


Route::get('/test', function () {
    return response()->json([
        'message' => 'Hello World!',
    ], 200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
