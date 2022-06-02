<?php
require_once "includes/db.php";

$method = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($method === "POST")
{
	$nome = $_POST['nome'];

	$stmt = $db->prepare("INSERT INTO cursos(nome) VALUES(:nome)");
	$stmt->bindParam(':nome', $nome);
	$stmt->execute();

	header("Location: index.php");
}
