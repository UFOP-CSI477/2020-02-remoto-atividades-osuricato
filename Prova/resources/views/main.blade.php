<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <title>Sistema de Controle de Vacinação</title>
</head>

<body>
  <div>
    <nav class="menu navbar navbar-dark bg-dark">
      <div class="col container-fluid d-flex justify-content-start">
        <ul class="row">
          <li class="col"> <a class="navbar-brand" href="{{route('main')}}">Início</a> </li>
          <li class="col"> <a class="navbar-brand" href="{{route('geral')}}">Área Geral</a> </li>
          <li class="col"> <a class="navbar-brand" href="{{route('admin')}}">Área Administrativa</a> </li>
        </ul>
      </div>

      <div class="col container-fluid d-flex justify-content-end">
        <ul class="row">
          @guest
          @if (Route::has('login'))
          <li class="col">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
          </li>
          @endif

          @if (Route::has('register'))
          <li class="col">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
          </li>
          @endif
          @else
          <li class="col dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </nav>

    @if(session('message'))

    <div class="alert alert-success">
      {{ session('message') }}
    </div>

    @endif

    @if(session('message-failed'))

    <div class="alert alert-danger">
      {{ session('message-failed') }}
    </div>

    @endif

    @yield('content')
  </div>
</body>

</html>