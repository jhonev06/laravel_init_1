<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class ProductController extends Controller
{

    // CRIADA UMA VARIAVEL PARA PRODUTOS ( datapro)
    // id chave primaria não tem limite de 2 como em slug : MAX 2

    public function index()
    {
        $datapro = Product::all();
        return response()->json($datapro);
    }

    public function show($id)
    {
        $datapro = Product::find($id);
        return response()->json($datapro);
    }

    public function store(Request $request)
    {
        $request->validate([
            //id removido alto incrmenta
            'name' => 'required',
            'price' => 'required',
            'description'=> 'nullable',
            'color' => 'nullable',
            'qtd' => 'required' ,
            'height' => 'required',
            'width' => 'required',
            'depth' => 'required',
            'category_id'=> 'required', // CHAVE ESTRAGEIRA?
            'active' => 'nullable',// ICONE BRANCO, O QUE SIGNIGICA // requerida?
            'bulk_slug'=> 'nullable' // CHAVE ESTRANGEIRA, requerda, dando erro no postman?


        ]);

        $datapro = Product::create($request->all());
        return response()->json($datapro);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description'=> 'nullable',
            'color' => 'nullable',
            'qtd' => 'required' ,
            'height' => 'required',
            'width' => 'required',
            'depth' => 'required',
            'category_id'=> 'nullable', // CHAVE ESTRAGEIRA, requerida?
            'active'=> 'nullable', // ICONE BRANCO, O QUE SIGNIGICA?
            'bulk_slug'=> 'nullable' //CHAVE ESTRANGEIRA, requerida?
        ]);
        $datapro = Product::find($id);
        $datapro->update($request->all());
        return response()->json($datapro);
    }

    public function delete($id)
    {
        $datapro = Product::find($id);
        $datapro->delete();

        return response()->json('', 201);
    }
}
