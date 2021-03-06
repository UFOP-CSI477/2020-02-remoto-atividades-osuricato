@extends('main')

@section('content')

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Visualizar</th>
        <th>Gerar Relatório</th>
      </tr>
    </thead>

    <tbody>
      @foreach($equipaments as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->name }}</td>
          <td><a href="{{route('equipaments.show', $e->id)}}">Exibir</a></td>
          <td><a href="{{route('report', $e)}}">Relatório</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection