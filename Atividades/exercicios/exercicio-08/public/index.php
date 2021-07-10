<?php

  require '../vendor/autoload.php';

  require './connection.php';

  $connection->query(
    "CREATE TABLE IF NOT EXISTS estados (
      id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
      nome VARCHAR(100) NOT NULL,
      sigla VARCHAR(2) NOT NULL
    );"
  );

  $estados = $connection->query("SELECT * FROM estados");

  $connection->query(
    "CREATE TABLE IF NOT EXISTS cidades (
      id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
      nome VARCHAR(100) NOT NULL
    );"
  );

  $cidades = $connection->query("SELECT * FROM cidades");

  $connection->query(
    "CREATE TABLE IF NOT EXISTS produtos (
      id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
      nome VARCHAR(100) NOT NULL,
      unidade VARCHAR(100) NOT NULL
    );"
  );

  $produtos = $connection->query("SELECT * FROM produtos");

  require '../App/Views/Estado/EstadoView.php';