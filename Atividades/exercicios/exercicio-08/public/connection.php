<?php

try {
  $dbfile = "../App/Database/db/database.sqlite";
  $dbuser = "";
  $dbpassword = "";
  $dbhost = "";

  $strConnection = "sqlite:" . $dbfile;

  $connection = new PDO($strConnection, $dbuser, $dbpassword);
} catch (PDOException $e) {
  echo "Não foi possível conectar com o banco de dados!";
}