<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    public function index()
    {
        // variavel "dataord" pra controller decustomres 
        $dataord = Order::all();
        return response()->json($dataord);
    }

    public function show($id)
    {
        $dataord = Order::find($id);
        return response()->json($dataord);
    }

    public function store(Request $request)
    {
        $request->validate([
            // campo ID removido 
            'number' => 'required|',
            'user_id', // foreign key
            'date' => 'required|',
            'type' => 'required|',
            'status' => 'required|',
            'customer_id', // foreign key
            'observation', // null
            'type_payment_id' // foreign key





        ]);

        $dataord = Order::create($request->all());
        return response()->json($dataord);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id',
            'number' => 'required|',
            'user_id', // foreign key
            'date' => 'required|',
            'type' => 'required|',
            'status' => 'required|',
            'customer_id', // foreign key
            'observation', // null
            'type_payment_id' // foreign key
        ]);
        $dataord = Order::find($id);
        $dataord->update($request->all());
        return response()->json($dataord);
    }

    public function delete($id)
    {
        $dataord = Order::find($id);
        $dataord->delete();

        return response()->json('', 201);
    }
}
