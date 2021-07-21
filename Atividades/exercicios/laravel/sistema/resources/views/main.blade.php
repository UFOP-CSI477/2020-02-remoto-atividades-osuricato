<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../css/global.css">
  <link rel="stylesheet" href="../css/home.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Sistema de Vendas</title>
</head>
<body>
  <div >
    <nav class="menu navbar navbar-dark bg-dark">
      <div class="container-fluid d-flex justify-content-end">
        <ul class="row">
          <li class="col"> <a class="navbar-brand" href="{{route('main')}}">Início</a> </li>
          <li class="col"> <a class="navbar-brand" href="{{route('people.index')}}">Pessoas</a> </li>
          <li class="col"> <a class="navbar-brand" href="{{route('products.index')}}">Produtos</a> </li>
          <li class="col"> <a class="navbar-brand" href="{{route('purchases.index')}}">Compras</a> </li>
        </ul>
      </div>
    </nav>

    @if(session('message'))

      <div class="alert alert-success">
        {{ session('message') }}
      </div>

    @endif

    @yield('content')
  </div>
</body>
</html>