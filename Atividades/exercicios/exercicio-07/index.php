<?php

  require_once 'connection.php';

  $connection->query(
    "CREATE TABLE IF NOT EXISTS products (
      id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
      nome VARCHAR(100) NOT NULL,
      unidade VARCHAR(3) NOT NULL
    );"
  );

  $products = $connection->query("SELECT * FROM products");

  require 'productsView.php';