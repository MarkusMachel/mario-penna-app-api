<?php

namespace App\Http\Controllers;

use App\Models\Programa_Residencia_Medica;
use Illuminate\Http\Request;

class ProgramaResidenciaMedicaController extends Controller
{
    public function salvarPrm(Request $request)
    {
        $validatedData = $request->validate([
            'Descricao' => 'required|string',
            'Observacao' => 'string',
        ]);

        $programaResidenciaMedica = Programa_Residencia_Medica::create($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Programa de Residencia Medica created successfully', 'data' => $programaResidenciaMedica], 201);
    }
    public function buscarPrm($id)
    {
        $programaResidenciaMedica = Programa_Residencia_Medica::findOrFail($id);

        // Additional logic or response

        return response()->json(['data' => $programaResidenciaMedica], 200);
    }
    public function buscarTodosPrm()
    {
        $programasResidenciaMedica = Programa_Residencia_Medica::all();

        // Additional logic or response

        return response()->json(['data' => $programasResidenciaMedica], 200);
    }
    public function atualizarPrm(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Descricao' => 'required|string',
            'Observacao' => 'string',
        ]);

        $programaResidenciaMedica = Programa_Residencia_Medica::findOrFail($id);
        $programaResidenciaMedica->update($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Programa de Residencia Medica updated successfully', 'data' => $programaResidenciaMedica], 200);
    }
    public function excluirPrm($id)
    {
        $programaResidenciaMedica = Programa_Residencia_Medica::findOrFail($id);
        $programaResidenciaMedica->delete();

        // Additional logic or response

        return response()->json(['message' => 'Programa de Residencia Medica deleted successfully'], 200);
    }

}
