@extends('main')

@section('content')
  
  <div class="container">
    <ul>
      <li> <a href="{{route('pessoas.index')}}">Página de Pessoas</a></li>
      <li> <a href="{{route('vacinas.index')}}">Página de Vacinas</a></li>
      <li> <a href="{{route('unidades.index')}}">Página de Unidades</a></li>
      <li> <a href="">Página de Registros</a></li>
    </ul>
  </div>

@endsection