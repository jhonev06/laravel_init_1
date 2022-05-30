<?php

namespace App\Http\Controllers;

use App\Models\Type_Payment;
use Illuminate\Http\Request;

class Type_PaymentController extends Controller
{


    public function index()
    {
        // variavel "dataty" pra controller de Type_Payment
        $dataty = Type_Payment::all();
        return response()->json($dataty);
    }

    public function show($id)
    {
        $dataty = Type_Payment::find($id);
        return response()->json($dataty);
    }

    public function store(Request $request)
    {
        $request->validate([
            // tirei o ID daqui 
            'name' => 'required',           
            

        ]);

        $dataty = Type_Payment::create($request->all());
        return response()->json($dataty);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|',
            'name' => 'required',           
            
        ]);
        $dataty = Type_Payment::find($id);
        $dataty->update($request->all());
        return response()->json($dataty);
    }

    public function delete($id)
    {
        $dataty = Type_Payment::find($id);
        $dataty->delete();

        return response()->json('', 201);
    }
}