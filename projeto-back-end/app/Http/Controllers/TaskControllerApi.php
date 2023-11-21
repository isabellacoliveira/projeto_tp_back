<?php

namespace App\Http\Controllers;
use App\Http\Resources\Task as TaskResource;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskControllerApi extends Controller
{
    public function index(){
        $TaskCollection = Task::all();
        return TaskResource::collection($TaskCollection);
    }

    public function store(Request $request){
        $dados = $request->all();
        $f = Task::create($dados);
        return response()->json($f, 201);
    }

    public function update(Request $request, Task $task)
    {
        $dados = $request->all();
        $task->update($dados);
        return new TaskResource($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }

    public function show(Task $task)
    {
        return new TaskResource($task);
    }

}

