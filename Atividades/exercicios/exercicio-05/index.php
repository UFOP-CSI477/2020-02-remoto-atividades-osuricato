<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 5</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #F0F0F5;
      -webkit-font-smoothing: antialiased;

      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;

      width: 90vw;
      height: 100vh;
    }

    body,
    input,
    button {
      font-family: Roboto, Arial, Helvetica, sans-serif;
    }

    #form .inputs {
      display: flex;
      flex-direction: column;
      margin-bottom: 16px;
    }

    button {
      width: 200px;
      height: 30px;
      font-size: 16px;
      font-weight: bold;

      border-radius: 4px;

      cursor: pointer;
      outline: none;
      border: none;

      color: #fff;
      background-color: #04AA6D;

      margin-bottom: 32px;
    }

    input {
      width: 200px;
      height: 30px;
      font-size: 16px;

      border-radius: 4px;
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
  </style>
</head>

<body>

  <div id="form">

    <form action="validar.php" method="post" name="formData">

      <div class="inputs">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
      </div>

      <div class="inputs">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">
      </div>

      <div class="inputs">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
      </div>
      
      <button type="submit">Acessar</button>
    </form>

  </div>

</body>

</html>