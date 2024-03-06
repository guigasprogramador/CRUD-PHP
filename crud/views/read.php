<?php
include "db/config.php";

$sql = "SELECT * FROM usuarios";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll();

foreach ($usuarios as $usuario) {
  echo "<tr>";
    echo "<td>" . $usuario["id"] . "</td>";
    echo "<td>" . $usuario["nome"] . "</td>";
    echo "<td>" . $usuario["email"] . "</td>";
    echo "<td>";
      echo "<a href='views/edit.php?id=" . $usuario["id"] . "' class='btn btn-sm btn-warning'>Editar</a>";
      echo " ";
      echo "<a href='views/delete.php?id=" . $usuario["id"] . "' class='btn btn-sm btn-danger'>Excluir</a>";
    echo "</td>";
  echo "</tr>";
}
?>
