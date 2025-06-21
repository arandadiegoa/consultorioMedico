<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turn;

class TakeTurnController extends Controller
{
    public function index()
    {
        return view('turns.save');
    }

      public function store(Request $request)
    {
        //Validate
        $request->validate([
            'document_number' => 'required|numeric|digits_between:7,8|exists:patients,document_number',
            'date' => 'required|date|after_or_equal:today', //evita fechas pasadas
            'status' => 'required|in:pendiente,confirmado,cancelado',
        ],[
            'document_number.exists' => 'The document number is not registered as a patient.',
        ]);

        //insert a la tabla
        Turn::create([
            'document_number'=>$request->document_number,
            'date' => $request->date,
            'status' => $request->status,
        ]);

        // Redirigir con mensaje a la home
        return redirect()->route('turns.list')->with('success', 'Turno registrado correctamente.');
    }
}