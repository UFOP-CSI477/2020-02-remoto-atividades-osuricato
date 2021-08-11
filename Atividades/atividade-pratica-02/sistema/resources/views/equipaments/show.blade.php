@extends('main')

@section('content')

<h1>Dados do Equipamento</h1>

<p>ID: {{ $equipament->id }}</p>
<p>Nome: {{ $equipament->name }}</p>

<a href="{{route('equipaments.edit', $equipament->id)}}">Editar</a>

<a href="{{route('equipaments.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('equipaments.destroy', $equipament->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o produto?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection