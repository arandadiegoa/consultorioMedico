<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;


class PatientsController extends Controller
{
    //List patients
    public function list(){

        $patients = Patient::all();
        return view('patients.list', compact('patients'));

    }

    //Edit patient
    public function edit($id){

        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }

    //Update patient
    public function update(Request $request, $id){
    
        $patient = Patient::findOrFail($id);    
        
        $request->validate([
            'name' =>'required|max:20',
            'document_number'=> 'required|numeric|digits_between:7,8|unique:patients,document_number,' . $patient->id,
            'email' => 'required|email|max:255|unique:patients,email,' . $patient->id,
            'birthdate' =>'required|date|before:-18 years',
        ]);

        //Update input
        $patient->update($request->only(['name', 'document_number', 'email', 'birthdate']));
        
        return redirect()->route('patients.list')->with('success', "Successful patient update");
    }

    //Delete
    public function destroy($id){
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('patients.list')->with('success', "Successful patient delete");
    }

    //Dashboard
    public function dashboard()
    {
        $patients = \App\Models\Patient::with('turns')->get();
        return view('dashboard', compact('patients'));
    }


}
