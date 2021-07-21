@extends('main')

@section('content')

<form action="{{route('people.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection