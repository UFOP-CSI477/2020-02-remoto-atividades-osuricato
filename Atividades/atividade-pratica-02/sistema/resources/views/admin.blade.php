@extends('main')

@section('content')
  
  <div class="container">
    <ul>
      <li> <a href="{{route('users.index')}}">Página de usuários</a></li>

      <li> <a href="{{route('equipaments.create')}}">Criar equipamento</a></li>

      <li> <a href="{{route('registers.create')}}">Criar registro de manutenção</a> </li>
    </ul>
  </div>

@endsection