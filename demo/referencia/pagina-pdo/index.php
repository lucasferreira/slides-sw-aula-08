<?php require_once("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo - HOME</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <?php require_once("menu.php"); ?>
  <main style="padding: 21px;">
    <p><strong>Lista de Cursos:</strong></p>
    <ul>
      <?php
      // se chegarmos até aqui é sucesso!
      try {
        $query = $conexao->query("SELECT * FROM cursos ORDER BY name ASC");
      } catch (PDOException $err) {
        echo 'Erro na query: ' . $err->getMessage();
        exit;
      }
      $rows = $query->fetchAll(PDO::FETCH_ASSOC);

      foreach($rows as $row) {
        echo "<li>" . $row["name"] . " | <a href='excluir_curso.php?id=" . $row["id"] . "'>Excluir</a></li>";
      }
      ?>
    </ul>

    <br />
    <form action="cadastrar_curso.php" method="post">
      <fieldset>
        <div class="form-group">
          <label for="nomeCurso">Nome do Curso:</label>
          <input type="text" id="nomeCurso" name="name" class="form-control" />
        </div>
        <button class="btn btn-primary btn-lg">Cadastrar Curso</button>
      </fieldset>
    </form>
  </main>
  <br />
  <?php require_once("rodape.php") ?>
</body>
</html>
