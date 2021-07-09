<?php

  require_once 'connection.php';

  $estados = $connection->query("SELECT * FROM estados");

  require 'estados.php';