@extends('main')

@section('content')

  <a href="{{route('registros.create')}}">Cadastrar Registro</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Pessoa</th>
        <th>Unidade</th>
        <th>Vacina</th>
        <th>Dose</th>
        <th>Data</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($registros as $e)
        <tr>
          <td>{{ $e->pessoa->nome }}</td>
          <td>{{ $e->unidade->nome }}</td>
          <td>{{ $e->vacina->nome }}</td>
          <td>{{ $e->dose }}</td>
          <td>{{ $e->data }}</td>
          <td><a href="{{route('registros.show', $e->id)}}">Exibir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection