@extends('main')

@section('content')

<h1>Dados do Produto</h1>

<p>ID: {{ $product->id }}</p>
<p>Nome: {{ $product->name }}</p>
<p>Unidade de Medida: {{ $product->unity }}</p>

<a href="{{route('products.edit', $product->id)}}">Editar</a>

<a href="{{route('products.index')}}">Voltar</a>

<form
  name="frmDelete"
  action="{{route('products.destroy', $product->id)}}"
  method="post"
  onsubmit="return confirm('Deseja excluir o produto?')">

  @csrf
  @method('DELETE')

  <input type="submit" value="Excluir">

</form>

@endsection