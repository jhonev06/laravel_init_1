<?php

namespace App\Http\Controllers;

use App\Models\Alternative_Unit;
use Illuminate\Http\Request;

class Alternative_UnitController extends Controller{


    public function index()
    {
        // variavel "dataL" pra controller de cagoria
        $dataL = Alternative_Unit::all();
        return response()->json($dataL);
    }

    public function show($id)
    {
        $dataL = Alternative_Unit::find($id);
        return response()->json($dataL);
    }

    public function store(Request $request)
    {
        $request->validate([
           
            // CHAVES ESTRANGEIRAS, CHAVES PRIMAIRAS?
            
            
        ]);

        $dataL = Alternative_Unit::create($request->all());
        return response()->json($dataL);
    }

    public function update(Request $request, $id) // corrigir chave primaria desta tabea
    {
        $request->validate([
            

            //CHAVE ESTRANGEIRAS, COMO PRIMARIAS?
        ]);
        $dataL = Alternative_Unit::find($id);
        $dataL->update($request->all());
        return response()->json($dataL);
    }

    public function delete($id)
    {
        $dataL = Alternative_Unit::find($id);
        $dataL->delete();

        return response()->json('',201);
    }

}