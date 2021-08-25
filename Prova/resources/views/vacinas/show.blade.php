@extends('main')

@section('content')

<h1>Dados da Vacina</h1>

<p>ID: {{ $vacina->id }}</p>
<p>Nome: {{ $vacina->nome }}</p>
<p>Fabricante: {{ $vacina->fabricante }}</p>
<p>Doses: {{ $vacina->doses }}</p>

<a href="{{route('vacinas.edit', $vacina->id)}}">Editar</a>

<a href="{{route('vacinas.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('vacinas.destroy', $vacina->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o usuário?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection