<?php

namespace App\Http\Controllers;

use App\Models\Stock_Location;
use Illuminate\Http\Request;

class StockLocationController extends Controller{


    public function index()
    {
        $datastockl = Stock_Location::all();
        return response()->json($datastockl);
    }
// pq parametro id ? assinatura do metodo
    public function show($id)
    {
        $datastockl = Stock_Location::find($id);
        return response()->json($datastockl);
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'description' => 'required',
        ]);

        $datastockl = Stock_Location::create($request->all());
        return response()->json($datastockl);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id'=>'required',
            'description' => 'required',
        ]);
        $datastockl = Stock_Location::find($id);
        $datastockl->update($request->all());
        return response()->json($datastockl);
    }

    public function delete($id)
    {
        $datastockl = Stock_Location::find($id);
        $datastockl->delete();

        return response()->json('',201);
    }

}