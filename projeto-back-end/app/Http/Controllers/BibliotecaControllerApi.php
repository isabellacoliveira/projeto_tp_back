<?php

namespace App\Http\Controllers;
use App\Http\Resources\Task as TaskResource;
use Illuminate\Http\Request;
use App\Models\Task;

class BibliotecaControllerApi extends Controller
{
    public function index(){
        $BibliotecaCollection = Biblioteca::all();
        return BibliotecaResource::collection($BibliotecaCollection);
    }

    public function store(Request $request){
        $dados = $request->all();
        $f = Biblioteca::create($dados);
        return response()->json($f, 201);
    }

    public function update(Request $request, Biblioteca $biblioteca)
    {
        $dados = $request->all();
        $biblioteca->update($dados);
        return new BibliotecaResource($biblioteca);
    }

    public function destroy(Biblioteca $biblioteca)
    {
        $biblioteca->delete();
        return response()->json(null, 204);
    }

    public function show(Biblioteca $biblioteca)
    {
        return new BibliotecaResource($biblioteca);
    }

}

