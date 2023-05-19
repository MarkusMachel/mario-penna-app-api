<?php

namespace App\Http\Controllers;

use App\Models\Gerenciar_Pontuacao;
use Illuminate\Http\Request;

class GerenciarPontuacaoController extends Controller
{
    public function salvarPontuacao(Request $request)
    {
        // Validate and store the form data
        $validatedData = $request->validate([
            'Data' => 'required|date',
            'Residente' => 'required|string',
            'Atividade' => 'required|string',
            'Pontuacao' => 'required|string',
        ]);

        Gerenciar_Pontuacao::create($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Pontuacao stored successfully']);
    }
    public function buscarPontuacao($id)
    {
        $pontuacao = Gerenciar_Pontuacao::findOrFail($id);

        // Additional logic or response

        return response()->json($pontuacao);
    }
    public function buscarTodosPontuacoes()
    {
        $pontuacoes = Gerenciar_Pontuacao::all();

        // Additional logic or response

        return response()->json($pontuacoes);
    }
    public function atualizarPontuacao(Request $request, $id)
    {
        $pontuacao = Gerenciar_Pontuacao::findOrFail($id);

        // Validate and update the form data
        $validatedData = $request->validate([
            'Data' => 'required|date',
            'Residente' => 'required|string',
            'Atividade' => 'required|string',
            'Pontuacao' => 'required|string',
        ]);

        $pontuacao->update($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Pontuacao updated successfully']);
    }
    public function excluirPontuacao($id)
    {
        $pontuacao = Gerenciar_Pontuacao::findOrFail($id);
        $pontuacao->delete();

        // Additional logic or response

        return response()->json(['message' => 'Pontuacao deleted successfully']);
    }
}
