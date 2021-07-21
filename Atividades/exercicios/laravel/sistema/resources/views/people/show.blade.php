@extends('main')

@section('content')

<h1>Dados da Pessoa</h1>

<p>ID: {{ $people->id }}</p>
<p>Nome: {{ $people->name }}</p>

<a href="{{route('people.edit', $people->id)}}">Editar</a>

<a href="{{route('people.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('people.destroy', $people->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir a pessoa?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection