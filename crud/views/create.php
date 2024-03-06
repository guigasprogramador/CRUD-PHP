<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qXvQRLeI94+5Q170Y19p+3z0q+yB4kY8Yv6r+z8r+H68QfZ7l744+yU" crossorigin="anonymous">

</head>
<body>
  <div class="container">
    <h1>Criar</h1>
    <form action="views/create.php" method="post" class="form-group">
  <label for="nome" class="form-label">Nome:</label>
  <input type="text" name="nome" id="nome" class="form-control">
  <br>
  <label for="email" class="form-label">Email:</label>
  <input type="email" name="email" id="email" class="form-control">
  <br><br>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $nome = $_POST["nome"];
      $email = $_POST["email"];

      // Validação de dados (JavaScript)

      if (empty($nome) || empty($email)) {
        echo "<p class='alert alert-danger'>Preencha todos os campos!</p>";
      } else {
        // Conexão com o banco de dados
        include "db/config.php";

        // Inserção de dados
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        echo "<p class='alert alert-success'>Usuário criado com sucesso!</p>";
      }
    }
    ?>
  </div>
  <script src="js/script.js"></script>

</body>
</html>
