@extends('main')

@section('content')

<form action="{{route('unidades.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome">
  </div>

  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" name="bairro" id="bairro">
  </div>

  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="cidade">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection