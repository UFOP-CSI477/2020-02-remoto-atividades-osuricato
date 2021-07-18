@extends('main')

@section('content')

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Unidade de Medida</th>
      </tr>
    </thead>

    <tbody>
      @foreach($products as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->name }}</td>
          <td>{{ $e->unity }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection