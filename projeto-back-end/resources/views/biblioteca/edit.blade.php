@extends('base')
@section('conteudo')
<form action="/bibliotecas/{{$objetoBiblioteca->id}}" method="post">
    @method('put')
    @csrf
    <p>title: <input type="text" name="titulo" value="{{old('titulo')}}"/> </p>
    @if($errors->has('titulo'))
        <p>{{$errors->first('titulo')}}</p>
    @endif
    <p>autor: <input type="text" name="autor" value="{{old('autor')}}"/> </p>
    @if($errors->has('autor'))
        <p>{{$errors->first('autor')}}</p>
    @endif
    <p>sinopse: <input type="text" name="sinopse" value="{{old('sinopse')}}"/> </p>
    @if($errors->has('sinopse'))
        <p>{{$errors->first('sinopse')}}</p>
    @endif
    <p>genero: <input type="text" name="genero" value="{{old('genero')}}"/> </p>
    @if($errors->has('genero'))
        <p>{{$errors->first('genero')}}</p>
    @endif


    <p>
        <input type="submit" value="enviar">
        <a href="/bibliotecas">Voltar</a>
    </p>
</form>
@endsection
