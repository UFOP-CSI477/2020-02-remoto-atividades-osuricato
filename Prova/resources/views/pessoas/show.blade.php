@extends('main')

@section('content')

<h1>Dados da Pessoa</h1>

<p>ID: {{ $pessoa->id }}</p>
<p>Nome: {{ $pessoa->nome }}</p>
<p>Bairro: {{ $pessoa->bairro }}</p>
<p>Cidade: {{ $pessoa->cidade }}</p>
<p>Data de nascimento: {{ $pessoa->data_nascimento }}</p>

<a href="{{route('pessoas.edit', $pessoa->id)}}">Editar</a>

<a href="{{route('pessoas.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('pessoas.destroy', $pessoa->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir a pessoa?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection