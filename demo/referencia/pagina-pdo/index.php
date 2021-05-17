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
    $queryInsert = "INSERT INTO cursos(name, created_at, updated_at) VALUE(:name, NOW(), NOW())";

    $stmt = $conn->prepare($queryInsert);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->execute();
  }

  $query = $conn->query("SELECT * FROM cursos ORDER BY name ASC");
  $rows = $query->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <ul>
    <?php foreach($rows as $row) { ?>
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
