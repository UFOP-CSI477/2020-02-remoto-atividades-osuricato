<?php

  namespace App\Controllers;

  require '../../public/connection.php';

  $nome = $_POST['nome'];
  $sigla = $_POST['sigla'];

  if (empty($nome) || empty($sigla) || strlen($nome) > 100 || strlen($sigla) > 2) {
    echo '<div><a href="./App/Views/Estado/InsertEstadoView.php">Voltar</a></div>';
    die('Informe os dados corretamente!');
  }

  try {
    $stmt = $connection->prepare("INSERT INTO estados (nome, sigla) VALUES (:nome, :sigla)");
    
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sigla', $sigla);
  
    $stmt->execute();
  
    echo "<script type='text/javascript'>alert('Estado cadastrado com sucesso!');</script>";
  
    header('Location: ./public/index.php');
    exit();
  } catch (\Throwable $th) {
    die("Erro ao inserir o estado: " . $th->getMessage());
  }
