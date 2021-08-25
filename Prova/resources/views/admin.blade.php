@extends('main')

@section('content')
  
  <div class="container">
    <ul>
      <li> <a href="{{route('pessoas.index')}}">Página de Pessoas</a></li>
      <li> <a href="{{route('vacinas.index')}}">Página de Vacinas</a></li>
    </ul>
  </div>

@endsection