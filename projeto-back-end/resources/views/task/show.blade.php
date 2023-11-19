@extends('base')
@section('conteudo')

<dl>
    <dt>Id</dt>
    <dd>{{$objetoTask->Id}}</dd>
    <dt>Title</dt>
    <dd>{{$objetoTask->title}}</dd>
    <dt>Description</dt>
    <dd>{{$objetoTask->description}}</dd>
    <dt>Completed</dt>
    <dd>{{$objetoTask->completed}}</dd>
</dl>


<form action="/task / {{$objetoTask->id}}" method="post">
    @csrf
    @method("delete")

    <input type="submit" value="Confirmar" />
    <a href="/tasks">Voltar</a>
    </form>
    @endsection
