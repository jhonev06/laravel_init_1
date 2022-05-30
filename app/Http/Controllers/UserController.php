<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        // variavel "dataus" pra controller de user
        $dataus = User::all();
        return response()->json($dataus);
    }

    public function show($id)
    {
        $dataus = User::find($id);
        return response()->json($dataus);
    }

    public function store(Request $request)
    {
        $request->validate([
            // tirei o ID daqui pq alto incrementa
            'name' => 'required',           
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',





        ]);

        $dataus = User::create($request->all());
        return response()->json($dataus);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|',
            'name' => 'required',           
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
        ]);
        $dataus = User::find($id);
        $dataus->update($request->all());
        return response()->json($dataus);
    }

    public function delete($id)
    {
        $dataus = User::find($id);
        $dataus->delete();

        return response()->json('', 201);
    }
}
