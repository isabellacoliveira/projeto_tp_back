@extends('base')
@section('conteudo')

<dl>
    <dt>Titulo</dt>
    <dd>{{$objetoTask->titulo}}</dd>
    <dt>Autor</dt>
    <dd>{{$objetoTask->autor}}</dd>
    <dt>Sinopse</dt>
    <dd>{{$objetoTask->sinopse}}</dd>
    <dt>Gênero</dt>
    <dd>{{$objetoTask->genero}}</dd>
</dl>


<form action="/task / {{$objetoBiblioteca->id}}" method="post">
    @csrf
    @method("delete")

    <input type="submit" value="Confirmar" />
    <a href="/bibliotecas">Voltar</a>
    </form>
    @endsection
