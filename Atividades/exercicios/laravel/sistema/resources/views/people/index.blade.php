@extends('main')

@section('content')

  <a href="{{route('people.create')}}">Cadastrar Pessoa</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($people as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->name }}</td>
          <td><a href="{{route('people.show', $e->id)}}">Exibir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection