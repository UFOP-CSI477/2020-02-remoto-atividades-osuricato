@extends('main')

@section('content')

  <a href="{{route('vacinas.create')}}">Cadastrar Vacina</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Fabricante</th>
        <th>Doses</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($vacinas as $e)
        <tr>
          <td>{{ $e->nome }}</td>
          <td>{{ $e->fabricante }}</td>
          <td>{{ $e->doses }}</td>
          <td><a href="{{route('vacinas.show', $e->id)}}">Relatório</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection