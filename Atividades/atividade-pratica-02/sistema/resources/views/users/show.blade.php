@extends('main')

@section('content')

<h1>Dados do Usuário</h1>

<p>ID: {{ $user->id }}</p>
<p>Nome: {{ $user->name }}</p>
<p>Nome: {{ $user->email }}</p>

<a href="{{route('users.edit', $user->id)}}">Editar</a>

<a href="{{route('users.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('users.destroy', $user->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o usuário?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection