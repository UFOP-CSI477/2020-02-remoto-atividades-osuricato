<?php

require 'connection.php';

$nome = $_POST['nome'];
$unidade = $_POST['unidade'];

if (empty($nome) || empty($unidade) || strlen($nome) > 100 || strlen($unidade) > 3) {
  echo '<div><a href="insertProductView.php">Voltar</a></div>';
  die('Informe os dados corretamente!');
}

try {
  $stmt = $connection->prepare("INSERT INTO products (nome, unidade) VALUES (:nome, :unidade)");

  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':unidade', $unidade);

  $stmt->execute();

  echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso!');</script>";

  header('Location: index.php');
  exit();
} catch (Exception $e) {
  $connection->rollBack();
  die("Erro ao inserir o produto: " . $e->getMessage());
}
