@extends('main')

@section('content')

<form action="{{route('users.update', $user->id)}}" method="post">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
  </div>

  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" name="password" id="password" value="{{ $user->password }}">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Atualizar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection