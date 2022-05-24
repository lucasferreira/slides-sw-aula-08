<?php
require_once("db.php");

$name = $_POST['name'];

$sqlDeInserir = "INSERT INTO cursos (name) VALUE(:name)";

$stmt = $conexao->prepare($sqlDeInserir);
$stmt->bindParam(':name', $name);
$stmt->execute();

header("Location: index.php");
?>
