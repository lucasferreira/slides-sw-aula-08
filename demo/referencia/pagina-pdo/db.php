<?php
try {
  $conexao = new PDO('mysql:host=host.docker.internal;dbname=satc;charset=utf8mb4', "root", "123456");
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
  echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
  exit;
}
