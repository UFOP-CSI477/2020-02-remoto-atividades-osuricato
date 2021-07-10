<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir produto</title>

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
      justify-content: space-evenly;
      flex-direction: column;

      width: 90vw;
      height: 100vh;
    }

    body,
    input,
    button {
      font-family: Roboto, Arial, Helvetica, sans-serif;
    }

    #form {
      display: flex;
      align-items: center;
      justify-content: center;

      width: 350px;
      height: 400px;

      border: 1px solid black;
    }

    #form form {
      display: flex;
      align-items: center;
      flex-direction: column;
    }

    #form .inputs {
      display: flex;
      flex-direction: column;
      margin-bottom: 24px;
    }

    button {
      width: 150px;
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
      height: 35px;
      font-size: 16px;

      border-radius: 4px;
      padding-left: 4px;
    }
  </style>
</head>

<body>

  <h1>Inserir Cidade</h1>

  <div id="form">

    <form action="../../Controllers/CidadeController.php" method="post" name="formData">

      <div class="inputs">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
      </div>

      <div class="inputs">
        <label for="unidade">Unidade</label>
        <input type="text" name="unidade" id="unidade">
      </div>
      
      <button type="submit">Inserir</button>
    </form>

  </div>

</body>

</html>