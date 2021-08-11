@extends('main')

@section('content')
  
  <div class="container">
    <ul>
      <li> <a href="{{route('equipaments.index')}}">Listagem de Equipamentos</a></li>

      <li> <a href="{{route('registers.index')}}">Listagem de manutenções para os equipamentos</a> </li>
    </ul>
  </div>

@endsection