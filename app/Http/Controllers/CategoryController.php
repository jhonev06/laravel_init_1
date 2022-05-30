<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller{


    public function index()
    {
        // variavel "datacat" pra controller de cagoria
        $datacat = Category::all();
        return response()->json($datacat);
    }

    public function show($id)
    {
        $datacat = Category::find($id);
        return response()->json($datacat);
    }

    public function store(Request $request)
    {
        $request->validate([
           
            'name' => 'required',
            
            
        ]);

        $datacat = Category::create($request->all());
        return response()->json($datacat);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            
            'id' => 'required|', // ID DO PRODUTO NÃO TEM LIMITE COMO DE BULKS ( MAX2)
            'name' => 'required',
            'category_id' => 'required'
        ]);
        $datacat = Category::find($id);
        $datacat->update($request->all());
        return response()->json($datacat);
    }

    public function delete($id)
    {
        $datacat = Category::find($id);
        $datacat->delete();

        return response()->json('',201);
    }

}