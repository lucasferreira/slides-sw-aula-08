<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=satc', "root", "123456");
} catch(PDOException $err) {
  echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
  exit;
}

$conn->query("SET NAMES 'utf8'");

header("Content-type: text/html; charset=UTF-8");
?>
