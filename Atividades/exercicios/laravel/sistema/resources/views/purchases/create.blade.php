@extends('main')

@section('content')

<form action="{{route('purchases.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>

  <div class="form-group">
    <label for="people_id">Pessoa</label>
    
    <select name="people_id" id="people_id" class="form-control">

      @foreach($people as $e)
        <option value="{{$e->id}}">{{$e->name}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="product_id">Produto</label>
    
    <select name="product_id" id="product_id" class="form-control">

      @foreach($product as $e)
        <option value="{{$e->id}}">{{$e->name}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="date">Data / Hora</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection