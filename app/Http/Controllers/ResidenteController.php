<?php

namespace App\Http\Controllers;

use App\Models\Residente;
use Illuminate\Http\Request;

class ResidenteController extends Controller
{
    public function salvarResidente(Request $request)
    {
        // Validate and store the form data
        $validatedData = $request->validate([
            'Nome' => 'required',
            'Matricula' => 'required',
            'Programa_de_Residencia_Medica' => 'required',
            'Observacao' => 'nullable',
        ]);

        Residente::create($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Residente stored successfully']);
    }

    public function buscarResidente($id)
    {
        $residente = Residente::findOrFail($id);

        // Additional logic or response

        return response()->json($residente);
    }

    public function buscarTodos()
    {
        //$residentes = Residente::all();
        $residentes = [
            [
                'Nome' => 'John Doe',
                'Matricula' => '123456',
                'Programa_de_Residencia_Medica' => 'Internal Medicine',
                'Observacao' => 'Lorem ipsum dolor sit amet.',
            ],
            [
                'Nome' => 'Jane Smith',
                'Matricula' => '987654',
                'Programa_de_Residencia_Medica' => 'Pediatrics',
                'Observacao' => 'Lorem ipsum dolor sit amet consectetur.',
            ],
            [
                'Nome' => 'Bob Johnson',
                'Matricula' => '123987',
                'Programa_de_Residencia_Medica' => 'Surgery',
                'Observacao' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            ],
        ];

        // Additional logic or response

        return response()->json($residentes);
    }
    public function atualizarResidente(Request $request, $id)
    {
        $residente = Residente::findOrFail($id);

        $residente->update($request->all());

        // Additional logic or response

        return response()->json(['message' => 'Residente updated successfully']);
    }
}
