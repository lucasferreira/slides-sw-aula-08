<?php require_once("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Homepage</title>
</head>
<body>
  <?php require_once("header.php"); ?>
  <h1>Bem-vindo</h1>

  <h3>Lista de Cursos:</h3>
  <?php
  if (!empty($_POST['name']))
  {
    $queryInsert = "INSERT INTO cursos(name, created_at, updated_at) VALUE('" . $_POST['name'] . "', NOW(), NOW())";
    $q = mysqli_query($conexao, $queryInsert);
    if (!$q) {
      echo 'Invalid query: ' . mysqli_error($conexao) . "\n";
      exit;
    }
  }

  $query = mysqli_query($conexao, "SELECT * FROM cursos ORDER BY name ASC");

  if (!$query) {
    echo 'Invalid query: ' . mysqli_error($conexao) . "\n";
    exit;
  }
  ?>
  <ul>
    <?php while($row = mysqli_fetch_assoc($query)) { ?>
    <li>Curso: <?php echo $row['name']; ?></li>
    <?php } ?>
  </ul>

  <h3>Novo Curso:</h3>
  <form action="index.php" method="post">
    <div class="form-group">
      <label for="name">Nome do Curso</label>
      <input name="name" type="text" value="" />
    </div>
    <button>Salvar curso</button>
  </form>
  <?php include("footer.php"); ?>
</body>
</html>
<?php mysqli_close($conexao); ?>
