@extends('main')

@section('content')

<h1>Dados da Manutenção</h1>

<p>ID: {{ $register->id }}</p>
<p>Descrição: {{ $register->description }}</p>
<p>Equipamento: {{ $register->equipament->name }}</p>
<p>Usuário: {{ $register->user->name }}</p>
<p>Data limite: {{ $register->limit_date }}</p>
<p>Tipo: {{ $register->type }}</p>

<a href="{{route('registers.edit', $register->id)}}">Editar</a>

<a href="{{route('registers.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('registers.destroy', $register->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o registro?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection