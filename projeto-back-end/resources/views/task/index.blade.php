@extends('base')
@section('conteudo')
<a href="/tasks/create">Novo</a>
<p>id title description completed</p>
    @foreach($TaskCollection as $task)
    <p>{{$task->title}} {{$task->description}} {{$task->completed}}  <a href="/tasks/{{$task->id}}/edit">Editar</a>
    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
    @csrf
    @method('DELETE')

        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este task?')">Excluir</button>
    </form></p>
    @endforeach

    {{ $TaskCollection->links() }}
@endsection
