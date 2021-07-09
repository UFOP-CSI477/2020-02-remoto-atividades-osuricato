<style>

  .container {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;

    width: 98vw;
    height: 90vh;

    font-family: Roboto, Arial, Helvetica, sans-serif;
  }

</style>

<?php

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $senha = $_POST['senha'];

  if ($nome == "Samuel" && $sobrenome == "Souza" && $senha == "12345") {
    ?>
    <div class="container">

      <h1>Bem vindo, <?php echo"$nome $sobrenome";?></h1>
      <p>Sua senha: <?php echo $senha;?></p>

      <a href="index.php">Voltar</a>
    </div>

  <?php
  } else {
  ?>
    <div class="container">

      <h1>Usuário e/ou senha inválidos!</h1>

      <a href="index.php">Voltar</a>
    </div>
  <?php
  }
  ?>