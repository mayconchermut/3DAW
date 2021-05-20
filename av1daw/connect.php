<?php
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $dbname = "av1daw";

  $conn = new mysqli($servidor, $usuario, $senha, $dbname) or die("Conexão com erro" . $conn->connect_error);
?>