<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cidades</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #F0F0F5;
      -webkit-font-smoothing: antialiased;
      font-family: Roboto, Arial, Helvetica, sans-serif;

      display: flex;
      align-items: center;
      justify-content: space-evenly;
      flex-direction: column;

      height: 100vh;
    }

    table {
      width: 50%;
    }

    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 10px;
    }

    th {
      font-size: 14pt;
      font-family: Tahoma;
      font-style: italic;
    }

    thead tr:hover {
      background-color: #9797dd;
    }

    tbody tr:hover {
      background-color: #a9a9a9;
    }


    tbody tr:nth-child(odd) {
      background-color: #b38f8f;
    }

    a {
      text-decoration: none;

      width: 200px;
      height: 35px;

      background-color: #9797dd;
      color: white;

      display: flex;
      align-items: center;
      justify-content: center;

      border-radius: 4px;

      font-weight: bold;
      font-size: 16px;
    }
  </style>

</head>

<body>

  <a href="./App/Views/Cidade/InsertCidadeView.php">Inserir estado</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
      </tr>
    </thead>

    <tbody>
      <?php
      while ($e = $cidades->fetch()) {
      ?>
        <tr>
          <td><?php echo $e["id"] ?></td>
          <td><?php echo $e["nome"] ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>

</body>

</html>