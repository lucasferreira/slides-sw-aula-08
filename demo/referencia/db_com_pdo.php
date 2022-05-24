<?php
header("Content-type: text/html; charset=utf-8");

try {
  $conn = new PDO('mysql:host=localhost;dbname=satc', "root", "123456");
} catch(PDOException $err) {
  echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Teste</title>
</head>
<body>
    <?php include("./topo.php"); ?>
    <div class="content">
      <p>Meu conteúdo com PDO</p>
    </div>
    <?php
    $search = '%silva%';
    $stmt = $conn->prepare("SELECT * FROM alunos WHERE nome LIKE :search");
    $stmt->bindParam( ':search', $search );
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row) {
      echo $row['nome'] . "<br />";
    }
    ?>
</body>
</html>
