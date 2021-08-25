@extends('main')

@section('content')

<h1>Dados do Registro</h1>

<p>ID: {{ $registro->id }}</p>
<p>Pessoa: {{ $registro->pessoa->nome }}</p>
<p>Unidade: {{ $registro->unidade->nome }}</p>
<p>Vacina: {{ $registro->vacina->nome }}</p>
<p>Dose: {{ $registro->dose }}</p>
<p>data: {{ $registro->data }}</p>

<a href="{{route('registros.edit', $registro->id)}}">Editar</a>

<a href="{{route('registros.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('registros.destroy', $registro->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o registro?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection