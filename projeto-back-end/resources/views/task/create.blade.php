@extends('base')
@section('conteudo')
<form action="/tasks" method="post">
    @csrf
    <p>title: <input type="text" name="title" value="{{ old('title') }}"/> </p>
    @if($errors->has('title'))
        <p>{{$errors->first('title')}}</p>
    @endif
    <p>description: <input type="text" name="description" value="{{ old('description') }}"/> </p>
    @if($errors->has('description'))
        <p>{{$errors->first('description')}}</p>
    @endif
    <p>
        completed:
        <label for="">Completed?</label>
        <input type="hidden" name="completed" value="0">
        <input type="checkbox" name="completed" {{ old('completed') ? 'checked' : '' }} value="1">
    </p>
    @if($errors->has('completed'))
        <p>{{$errors->first('completed')}}</p>
    @endif
    <p>
        <input type="submit" value="enviar">
        <a href="/tasks">Voltar</a>
    </p>
</form>
@endsection
