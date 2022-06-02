<?php require_once "includes/db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo - HOME</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <?php require_once "includes/topo.php";?>
    <main style="padding: 21px;">
      <p><strong>Lista de Cursos Disponíveis:</strong></p>
      <?php
      	$query = $db->query("SELECT * FROM cursos");
      	$rows = $query->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <ul>
        <?php foreach ($rows as $curso): ?>
        <li><?php echo $curso['nome']; ?> | <a href="excluir_curso.php?id=<?php echo $curso['id']; ?>">Excluir #<?php echo $curso['id']; ?></a></li>
        <?php endforeach;?>
      </ul>

      <br />
      <form action="cadastrar_curso.php" method="post" style="border-top: 1px solid black; padding-top: 16px;">
        <fieldset>
          <div class="form-group">
            <label for="nomeCurso">Adicionar novo Curso:</label>
            <input type="text" id="nomeCurso" name="nome" class="form-control" />
          </div>
          <button class="btn btn-primary btn-lg">Cadastrar Curso</button>
        </fieldset>
      </form>
    </main>
    <?php require_once "includes/rodape.php";?>
  </div>
</body>
</html>
