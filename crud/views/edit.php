<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>Editar</h1>
    <?php
    include "db/config.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nome = $_POST["nome"];
      $email = $_POST["email"];

      // Validação de dados (JavaScript)

      if (empty($nome) || empty($email)) {
        echo "<p class='alert alert-danger'>Preencha todos os campos!</p>";
      } else {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        echo "<p class='alert alert-success'>Usuário atualizado com sucesso!</p>";
      }
    }
    ?>

    <form action="" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $usuario["nome"]; ?>">
      <br>
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" value="<?php echo $usuario["email"]; ?>">
      <br><br>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
  <script src="js/script.js"></script>

</body>
</html>
