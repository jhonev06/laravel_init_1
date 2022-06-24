<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller{


    public function index()
    {
        $dataOrder = Order::all();
        return response()->json($dataOrder);
    }
// pq parametro id ? assinatura do metodo
    public function show($id)
    {
        $dataOrder = Order::find($id);
        return response()->json($dataOrder);
    }

    public function store(Request $request)
    {
        $request->validate([
            
            
            'date'=> 'required',
            
            
        ]);

        $dataOrder = Order::create($request->all());
        return response()->json($dataOrder);
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            
            'date'=> 'required',
            
            
        ]);
        $dataOrder = Order::find($id);
        return response()->json($dataOrder);
    }

    public function delete($id)
    {
        $dataOrderl = Order::find($id);
        $dataOrderl->delete();

        return response()->json('',201);
    }

}