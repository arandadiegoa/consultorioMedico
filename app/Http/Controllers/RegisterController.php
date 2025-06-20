<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class RegisterController extends Controller
{
    public function index()
    {
        return view('patients.register');
    }

    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'name' =>'required|max:20',
            'document_number'=> 'required|numeric|digits_between:7,8',
            'email' => 'required|email|max:255|unique:patients',
            'phone' => 'required|string|max:20',
            'birthdate' => 'required|date|before:-18 years',
        ]);

        //insert a la tabla
        Patient::create([
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

