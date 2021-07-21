@extends('main')

@section('content')

  <a href="{{route('purchases.create')}}">Cadastrar Compra</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data / Hora</th>
        <th>Pessoa</th>
        <th>Produto</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($purchases as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->name }}</td>
          <td>{{ $e->date }}</td>
          <td>{{ $e->people->name }}</td>
          <td>{{ $e->product_id }}</td>
          <td><a href="{{route('purchases.show', $e->id)}}">Exibir</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection