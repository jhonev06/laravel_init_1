<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller{


    public function index()
    {
        // variavel "datacus" pra controller decustomres 
        $datacus = Customer::all();
        return response()->json($datacus);
    }

    public function show($id)
    {
        $datacus = Customer::find($id);
        return response()->json($datacus);
    }

    public function store(Request $request)
    {
        $request->validate([
            // tirei o ID daqui pq alto incrementa
            'name' => 'required',
            'document' => 'required',
            'email' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'number' => 'required',
            'state' => 'required',
            


            
            
        ]);

        $datacus = Customer::create($request->all());
        return response()->json($datacus);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|',
            'name' => 'required',
            'document' => 'required',
            'email' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'number' => 'required',
            'state' => 'required',
        ]);
        $datacus = Customer::find($id);
        $datacus->update($request->all());
        return response()->json($datacus);
    }

    public function delete($id)
    {
        $datacus = Customer::find($id);
        $datacus->delete();

        return response()->json('',201);
    }

}