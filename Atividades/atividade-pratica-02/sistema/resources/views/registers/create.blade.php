@extends('main')

@section('content')

<form action="{{route('registers.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="description">Descrição</label>
    <input type="text" class="form-control" name="description" id="description" required>
  </div>

  <div class="form-group">
    <label for="equipament_id">Equipamento</label>
    
    <select name="equipament_id" id="equipament_id" class="form-control" required>

      @foreach($equipaments as $e)
        <option value="{{$e->id}}">{{$e->name}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="user_id">Usuário</label>
    
    <select name="user_id" id="user_id" class="form-control" required>

      @foreach($users as $e)
        <option value="{{$e->id}}">{{$e->name}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="limit_date">Data limite</label>
    <input type="date" class="form-control" name="limit_date" id="limit_date" required>
  </div>

  <div class="form-group">
    <label for="type">Tipo</label>
    <input type="text" class="form-control" name="type" id="type" required>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection