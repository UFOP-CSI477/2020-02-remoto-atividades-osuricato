@extends('main')

@section('content')

<h1>Dados da Manutenção</h1>

<p>ID: {{ $registers->id }}</p>
<p>Nome: {{ $registers->description }}</p>
<p>Nome: {{ $registers->equipament->name }}</p>
<p>Nome: {{ $registers->user->name }}</p>
<p>Nome: {{ $registers->limit_date }}</p>
<p>Nome: {{ $registers->type }}</p>

<a href="{{route('registers.edit', $registers->id)}}">Editar</a>

<a href="{{route('registers.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('registers.destroy', $registers->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o registro?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection