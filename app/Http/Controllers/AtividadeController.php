<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;

class AtividadeController extends Controller
{
    //
    public function store(Request $request)
    {
        // Validate and store the form data
        $validatedData = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
        ]);

        Atividade::create($validatedData);

        // Additional logic or response

        return response()->json(['message' => 'Data stored successfully']);
    }
}
