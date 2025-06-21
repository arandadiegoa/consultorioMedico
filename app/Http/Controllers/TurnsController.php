<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turn;


class TurnsController extends Controller
{
    //List turns
    public function listTurns(){

        $turns = Turn::all();
        return view('turns.list', compact('turns'));

    }
    
    //Edit turn
    public function edit($id){

        $turn = Turn::findOrFail($id);
        return view('turns.edit', compact('turn'));
    }
    
     //Update turn
    public function update(Request $request, $id){
    
        $turn = Turn::findOrFail($id);    
        
        $request->validate([
            'document_number'=> 'required|numeric|digits_between:7,8|unique:patients,document_number,' . $turn->id,
            'date' => 'required|date|after_or_equal:today', //evita fechas pasadas
            'status' => 'required|in:pendiente,confirmado,cancelado',
        ]);

        //Update input
        $turn->update($request->only(['document_number', 'name', 'status']));
        
        return redirect()->route('turns.list')->with('success', "Successful turn update");
    }

    
    //Delete
    public function destroy($id){
        $turn = Turn::findOrFail($id);
        $turn->delete();
        return redirect()->route('turns.list')->with('success', "Successful turn delete");
    }

}
