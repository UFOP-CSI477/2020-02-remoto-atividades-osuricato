@extends('main')

@section('content')

<form action="{{route('users.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>

  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection