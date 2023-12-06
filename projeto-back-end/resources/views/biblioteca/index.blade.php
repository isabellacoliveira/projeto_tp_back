@extends('base')
@section('conteudo')
<a href="/bibliotecas/create">Novo</a>
<p>id titulo autor sinopse gênero  </p>
    @foreach($BibliotecaCollection as $biblioteca)
    <p>{{$biblioteca->titulo}} {{$biblioteca->autor}} {{$biblioteca->sinopse}}  {{$biblioteca->genero}}  <a href="/bibliotecas/{{$biblioteca->id}}/edit">Editar</a>
    <form method="POST" action="{{ route('bibliotecas.destroy', $biblioteca->id) }}">
    @csrf
    @method('DELETE')

        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</button>
    </form></p>
    @endforeach

    {{ $BibliotecaCollection->links() }}
@endsection
