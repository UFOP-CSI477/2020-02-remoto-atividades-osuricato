@extends('main')

@section('content')

<form action="{{route('products.update', $product->id)}}" method="post">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
  </div>

  <div class="form-group">
    <label for="unity">Unidade de Medida</label>
    <input type="text" class="form-control" name="unity" id="unity" value="{{ $product->unity }}">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Atualizar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection