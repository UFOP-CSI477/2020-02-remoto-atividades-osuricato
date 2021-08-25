@extends('main')

@section('content')

<form action="{{route('unidades.update', $unidade->id)}}" method="post">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{ $unidade->nome }}">
  </div>

  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $unidade->bairro }}">
  </div>

  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $unidade->cidade }}">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Atualizar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection