@extends('main')

@section('content')

  <a href="{{route('users.create')}}">Cadastrar Usuário</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($users as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->name }}</td>
          <td>{{ $e->email }}</td>
          <td><a href="{{route('users.show', $e->id)}}">Exibir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection