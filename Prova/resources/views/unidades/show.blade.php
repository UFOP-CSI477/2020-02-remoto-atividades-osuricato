@extends('main')

@section('content')

<h1>Dados da Unidade</h1>

<p>ID: {{ $unidade->id }}</p>
<p>Nome: {{ $unidade->nome }}</p>
<p>Bairro: {{ $unidade->bairro }}</p>
<p>Cidade: {{ $unidade->cidade }}</p>

<a href="{{route('unidades.edit', $unidade->id)}}">Editar</a>

<a href="{{route('unidades.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('unidades.destroy', $unidade->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir a unidade?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection