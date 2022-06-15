<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller{

    private $model;
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function show($id)
    {
        // MOSTRAR PEDIDO COM VALOR TOTAL 

    }

    public function store(OrderRequest $request)
    {
        //SALVAR PEDIDO COM ITENS 
        // ATRIBUIR AUTOMATICAMENTE O CAMPO 'NUMBER' ( BUSCANDO NO BANCO O ULTIMO E INCREMENTANDO  +1) 

    }

    public function update(OrderRequest $request, $id)
    {
       

    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        $data->delete();

        return response()->json('',201);
    }

}