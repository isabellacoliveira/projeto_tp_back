<?php

namespace App\Http\Controllers;
use App\Http\Resources\Task as TaskResource;
use Illuminate\Http\Request; // Importe a classe Request
use App\Models\Task;

class TaskControllerApi extends Controller
{
    public function index(){
        $TaskCollection = Task::all(); // Corrigido o nome da variável
        return TaskResource::collection($TaskCollection); // Corrigido o uso da classe de recursos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){ // Corrigido o tipo de parâmetro da função
        $dados = $request->all(); // Corrigido o uso da variável $request
        $f = Task::create($dados);
        return response()->json($f, 201);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
