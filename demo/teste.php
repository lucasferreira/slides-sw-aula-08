<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=satc', "root", "123456");
} catch(PDOException $err) {
  echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
  exit;
}

$search = '%silva%';

$stmt = $conn->prepare("SELECT * FROM alunos WHERE nome LIKE :search");
$stmt->bindParam( ':search', $search );
$stmt->execute();

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
  echo $row['nome'] . "<br />";
}
?>
