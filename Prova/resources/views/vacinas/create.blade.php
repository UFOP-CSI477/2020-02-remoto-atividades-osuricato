@extends('main')

@section('content')

<form action="{{route('vacinas.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" required>
  </div>

  <div class="form-group">
    <label for="fabricante">Fabricante</label>
    <input type="text" class="form-control" name="fabricante" id="fabricante" required>
  </div>

  <div class="form-group">
    <label for="doses">Doses</label>
    <input type="number" class="form-control" name="doses" id="doses" required>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection