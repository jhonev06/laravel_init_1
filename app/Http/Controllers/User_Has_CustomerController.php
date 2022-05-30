<?php

namespace App\Http\Controllers;

use App\Models\User_Has_Customer;
use Illuminate\Http\Request;

class User_Has_CustomerController extends Controller{


    public function index()
    {
        $dataushas = User_Has_Customer::all();
        return response()->json($dataushas);
    }
// pq parametro id ? assinatura do metodo
    public function show($id)
    {
        $dataushas = User_Has_Customer::find($id);// qual chave primaria usar aqui?
        return response()->json($dataushas);
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'user_id' => 'required',
            'customer_id' => 'required',
        ]);

        $dataushas = User_Has_Customer::create($request->all());
        return response()->json($dataushas);
    }

    public function update(Request $request, $id) // qual chave primaria usar aqui?
    {
        $request->validate([
            'user_id' => 'required',
            'customer_id' => 'required',
        ]);
        $dataushas = User_Has_Customer::find($id);// qual chave primaria usar aqui?
        $dataushas->update($request->all());
        return response()->json($dataushas);
    }

    public function delete($id)
    {
        $dataushas = User_Has_Customer::find($id);// qual chave primaria usar aqui?
        $dataushas->delete();

        return response()->json('',201);
    }

}