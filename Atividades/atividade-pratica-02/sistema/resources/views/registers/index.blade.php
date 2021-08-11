@extends('main')

@section('content')

  <a href="{{route('registers.create')}}">Cadastrar Manutenção</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Equipamento</th>
        <th>Usuário</th>
        <th>Data limite</th>
        <th>Tipo</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($registers as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->description }}</td>
          <td>{{ $e->equipament->name }}</td>
          <td>{{ $e->user->name }}</td>
          <td>{{ $e->limit_date }}</td>
          <td>{{ $e->type }}</td>
          <td><a href="{{route('registers.show', $e->id)}}">Exibir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection