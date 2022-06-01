<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order_ItenRequest;
use App\Models\Order_Iten;
use Illuminate\Http\Request;

class Order_ItenController extends Controller{

    private $model;
    public function __construct(Order_Iten $model)
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
        $data = $this->model->find($id);
        return response()->json($data);
    }

    public function store(Order_ItenRequest $request)
    {
        $data = $this->model->create($request->all());
        return response()->json($data);
    }

    public function update(Order_ItenRequest $request, $id)
    {
        $data = $this->model->find($id);
        $data->update($request->all());
        return response()->json($data);
    }

    public function delete($id)
    {
        $data = $this->model->find($id);
        $data->delete();

        return response()->json('',201);
    }

}