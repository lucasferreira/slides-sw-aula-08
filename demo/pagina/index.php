<?php require_once("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo - HOME</title>
</head>
<body>
  <?php require_once("menu.php"); ?>
  <main>
    <p><strong>Lista de Cursos:</strong></p>
    <?php
    // se chegarmos até aqui é sucesso!
    $query = mysqli_query($conexao, "SELECT * FROM cursos ORDER BY name ASC");

    if (!$query) {
      echo 'Invalid query: ' . mysqli_error($conexao) . "\n";
      exit;
    }

    while ($row = mysqli_fetch_assoc($query)) {
      echo $row["name"] . "<br />";
    }
    ?>
  </main>
  <br />
  <?php require_once("rodape.php") ?>
</body>
</html>
