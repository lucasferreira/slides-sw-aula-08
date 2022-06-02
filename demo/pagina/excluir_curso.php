<?php
require_once "includes/db.php";

$method = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($method === "GET")
{
	$id = $_GET['id'];

	$stmt = $db->prepare("DELETE FROM cursos WHERE id = :id");
	$stmt->bindParam(':id', $id);
	$stmt->execute();

	header("Location: index.php");
}
