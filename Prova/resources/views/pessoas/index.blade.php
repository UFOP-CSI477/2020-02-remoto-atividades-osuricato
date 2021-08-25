@extends('main')

@section('content')

  <a href="{{route('pessoas.create')}}">Cadastrar Pessoa</a>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Data de nascimento</th>
        <th>Exibir</th>
      </tr>
    </thead>

    <tbody>
      @foreach($pessoas as $e)
        <tr>
          <td>{{ $e->nome }}</td>
          <td>{{ $e->bairro }}</td>
          <td>{{ $e->cidade }}</td>
          <td>{{ $e->data_nascimento }}</td>
          <td><a href="{{route('pessoas.show', $e->id)}}">Relatório</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection