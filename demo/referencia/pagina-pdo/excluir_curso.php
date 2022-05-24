<?php
require_once("db.php");

$id = $_GET['id'];

$sqlDeExcluir = "DELETE FROM cursos WHERE id = :id";

$stmt = $conexao->prepare($sqlDeExcluir);
$stmt->bindParam(':id', $id);
$stmt->execute();

header("Location: index.php");
?>
