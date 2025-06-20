<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turn;

class TakeTurnController extends Controller
{
    public function index()
    {
        return view('turns.takeTurn');
    }

      public function store(Request $request)
    {
        //Validate
        $request->validate([
            'document_number' => 'required|numeric|digits_between:7,8|exists:patients,document_number',
            'date' => 'required|date|after_or_equal:today',
            'status' => 'required|in:pendiente,confirmado,cancelado',
        ]);

        //insert a la tabla
        Turn::create([
            'name' =>$request->name,
            'document_number'=>$request->document_number,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthdate' =>$request->birthdate,
        ]);

        // Redirigir con mensaje a la home
        return redirect()->route('patients.list')->with('success', 'Paciente registrado correctamente.');
    }
}


  protected $fillable = [
        'document_number',
        'date',
        'status',
    ];