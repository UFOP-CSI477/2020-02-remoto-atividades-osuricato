@extends('main')

@section('content')

  <a href="{{route('products.create')}}">Cadastrar Produto</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Unidade de Medida</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($products as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->name }}</td>
          <td>{{ $e->unity }}</td>
          <td><a href="{{route('products.show', $e->id)}}">Exibir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection