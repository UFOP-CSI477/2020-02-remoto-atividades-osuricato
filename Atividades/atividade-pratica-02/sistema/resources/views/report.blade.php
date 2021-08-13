@extends('main')

@section('content')

<h1>Registros do equipamento {{ $equipament->name }}</h1>

  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Data limite</th>
        <th>Tipo</th>
      </tr>
    </thead>

    <tbody>
      @foreach($registers as $e)
        @if ($e->equipament_id == $equipament->id)
          <tr>
            <td>{{ $e->id }}</td>
            <td>{{ $e->description }}</td>
            <td>{{ $e->limit_date }}</td>
            <td>{{ $e->type }}</td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>

@endsection