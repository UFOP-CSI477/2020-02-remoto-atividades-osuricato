@extends('main')

@section('content')

<form action="{{route('equipaments.update', $equipament->id)}}" method="post">

  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $equipament->name }}">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Atualizar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection