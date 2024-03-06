<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "crud";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>
