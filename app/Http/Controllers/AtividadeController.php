<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    //
    public function buscarAtividade($id)
    {
        $atividade = Atividade::find($id);

        if (!$atividade) {
            return response()->json(['error' => 'Atividade not found'], 404);
        }

        return response()->json($atividade);
    }

    public function salvarAtividade(Request $request)
    {
        // Validate and store the form data
        $validatedData = $request->validate([
            'Descricao' => 'required',
            'Tipo_de_Atividade' => 'required',
            'Multiplicador' => 'required',
        ]);

        Atividade::create($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Data stored successfully']);
    }
}
