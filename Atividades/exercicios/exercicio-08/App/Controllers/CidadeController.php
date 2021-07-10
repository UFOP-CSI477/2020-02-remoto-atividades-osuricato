<?php

  namespace App\Controllers;

  require '../../public/connection.php';

  $nome = $_POST['nome'];

  if (empty($nome) || strlen($nome) > 100) {
    echo '<div><a href="./App/Views/Cidade/InsertCidadeView.php">Voltar</a></div>';
    die('Informe os dados corretamente!');
  }

  try {
    $stmt = $connection->prepare("INSERT INTO cidades (nome) VALUES (:nome)");
    
    $stmt->bindParam(':nome', $nome);
  
    $stmt->execute();
  
    echo "<script type='text/javascript'>alert('Estado cadastrado com sucesso!');</script>";
  
    header('Location: ./public/index.php');
    exit();
  } catch (\Throwable $th) {
    die("Erro ao inserir o estado: " . $th->getMessage());
  }
