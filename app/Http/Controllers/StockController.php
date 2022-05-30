<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller{


    public function index()
    {
        $datastock = Stock::all();
        return response()->json($datastock);
    }
// pq parametro id ? assinatura do metodo
    public function show($id)
    {
        $datastock = Stock::find($id);
        return response()->json($datastock);
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'product_id'=> 'required', // foreing key? requerido?
            'stock_location_id'=> 'required',// foreign key? requerido?
            'qtd' => 'required',
            'lote' => 'required',
        ]);

        $datastock = Stock::create($request->all());
        return response()->json($datastock);
    }

    public function update(Request $request, $id) // qual primary chave usar aqui?
    {
        $request->validate([
            'product_id'=> 'required', // foreing key? requerido?
            'stock_location_id'=> 'required',// foreign key? requerido?
            'qtd' => 'required',
            'lote' => 'required',
        ]);
        $datastock = Stock::find($id);// qual primary chave usar aqui?
        $datastock->update($request->all());
        return response()->json($datastock);
    }

    public function delete($id)// qual primary chave usar aqui?
    {
        $datastockl = Stock::find($id);// qual primary chave usar aqui?
        $datastockl->delete();

        return response()->json('',201);
    }

}