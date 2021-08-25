@extends('main')

@section('content')

<form action="{{route('registros.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="pessoa_id">Pessoa</label>
    <select name="pessoa_id" id="pessoa_id" class="form-control" required>

      @foreach($pessoas as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="unidade_id">Unidade</label>
    <select name="unidade_id" id="unidade_id" class="form-control" required>

      @foreach($unidades as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="vacina_id">Vacina</label>
    <select name="vacina_id" id="vacina_id" class="form-control" required>

      @foreach($vacinas as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
      @endforeach

    </select>
  </div>

  <div class="form-group">
    <label for="dose">Dose</label>
    <input type="number" class="form-control" name="dose" id="dose" required>
  </div>

  <div class="form-group">
    <label for="data">Data</label>
    <input type="date" class="form-control" name="data" id="data" required>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Cadastrar">
    <input type="reset" class="btn btn-danger" value="Limpar">
  </div>

</form>

@endsection