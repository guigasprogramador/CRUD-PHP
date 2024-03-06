<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Completo</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>CRUD Completo</h1>
    <a href="views/create.php" class="btn btn-primary">Criar</a>
    <br><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "views/read.php";
        ?>
      </tbody>
    </table>
  </div>
  <script src="js/script.js"></script>

</body>
</html>
