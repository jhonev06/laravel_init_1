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
            // DUVIDA NO ITEM CATEGORIES max 2 PIPI-POPO!!, 
            // entra como mesmo item requerido?
            'id' => 'required|unique:categories|max:2',
            'name' => 'required',
            // DUVIDA NO ITEM CATEGORIES_ID, 
            // entra como mesmo item requerido?
            'categories_id' => 'required'
        ]);

        $datacat = Category::create($request->all());
        return response()->json($datacat);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // max 2 da mesma forma q o slug?
            'id' => 'required|max:2',
            'name' => 'required',
            // DUVIDA NO ITEM CATEGORIES_ID, 
            // entra como mesmo item requerido?
            'categories_id' => 'required'
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