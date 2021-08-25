@extends('main')

@section('content')

<form action="{{route('pessoas.update', $pessoa->id)}}" method="post">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{ $pessoa->nome }}" required>
  </div>

  <div class="form-group">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $pessoa->bairro }}" required>
  </div>

  <div class="form-group">
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $pessoa->cidade }}" required>
  </div>

  <div class="form-group">
    <label for="data_nascimento">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ $pessoa->data_nascimento }}" required>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Atualizar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection