<?php
include "db/config.php";

$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

header("Location: index.php");  // Redireciona para a página inicial após exclusão
?>
