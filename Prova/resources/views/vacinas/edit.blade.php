@extends('main')

@section('content')

<form action="{{route('vacinas.update', $vacina->id)}}" method="post">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{ $vacina->nome }}">
  </div>

  <div class="form-group">
    <label for="fabricante">Fabricante</label>
    <input type="text" class="form-control" name="fabricante" id="fabricante" value="{{ $vacina->fabricante }}">
  </div>

  <div class="form-group">
    <label for="doses">Doses</label>
    <input type="number" class="form-control" name="doses" id="doses" value="{{ $vacina->doses }}">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Atualizar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection