@extends('main')

@section('content')

  <a href="{{route('unidades.create')}}">Cadastrar Unidade</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($unidades as $e)
        <tr>
          <td>{{ $e->nome }}</td>
          <td>{{ $e->bairro }}</td>
          <td>{{ $e->cidade }}</td>
          <td><a href="{{route('unidades.show', $e->id)}}">Relatório</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection