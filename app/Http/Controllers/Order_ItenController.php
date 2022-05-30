<?php

namespace App\Http\Controllers;

use App\Models\Order_Iten;
use Illuminate\Http\Request;

class Order_ItenController extends Controller{


    public function index()
    {
        // variavel "dataord" pra controller de order itens?
        $dataord = Order_Iten::all();
        return response()->json($dataord);
    }

    public function show($seq)
    {
        $dataord = Order_Iten::find($seq);
        return response()->json($dataord);
    }

    public function store(Request $request)
    {
        $request->validate([
           
        'seq' => 'required|unique', // dado único, é alto incrementado com ID?
        'order_id',// foreign key??
        'product_id',// foreign key??
        'qtd' => 'required',
        'value' => 'required',
        'discount' => 'required',
        'perc_discount' => 'required'
            
            
        ]);

        $dataord = Order_Iten::create($request->all());
        return response()->json($dataord);
    }

    public function update(Request $request, $seq)
    {
        $request->validate([
            'seq' => 'required|unique',// dado único, é alto incrementado com ID?
            'order_id',// foreign key??
            'product_id',// foreign key??
            'qtd' => 'required',
            'value' => 'required',
            'discount' => 'required',
            'perc_discount' => 'required'
        ]);
        $dataord = Order_Iten::find($seq);
        $dataord->update($request->all());
        return response()->json($dataord);
    }

    public function delete($seq)
    {
        $dataord = Order_Iten::find($seq);
        $dataord->delete();

        return response()->json('',201);
    }

}