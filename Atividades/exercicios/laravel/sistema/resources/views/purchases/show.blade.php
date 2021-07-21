@extends('main')

@section('content')

<h1>Dados da Compra</h1>

<p>ID: {{ $purchases->id }}</p>
<p>Nome: {{ $purchases->name }}</p>
<p>Nome: {{ $purchases->people_id }}</p>
<p>Nome: {{ $purchases->product_id }}</p>
<p>Nome: {{ $purchases->date }}</p>

<a href="{{route('purchases.edit', $purchases->id)}}">Editar</a>

<a href="{{route('purchases.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('purchases.destroy', $purchases->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir a compra?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection