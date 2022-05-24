<?php
require_once("db.php");

$name = $_POST['name'];

$sqlDeInserir = "INSERT INTO cursos (name) VALUE('" . $name ."')";

$queryInsert = mysqli_query($conexao, $sqlDeInserir);
if (!$queryInsert) {
  echo 'Invalid query: ' . mysqli_error($queryInsert) . "\n";
  exit;
}

header("Location: index.php");
?>
