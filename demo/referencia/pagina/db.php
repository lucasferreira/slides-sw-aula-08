<?php
$conexao = mysqli_connect("localhost", "root", "123456", "satc");

if(!$conexao) {
  echo "ERRO: Não foi possível conectar em seu banco de dados";
  exit;
}

mysqli_query($conexao, "SET NAMES 'utf8'");

header("Content-type: text/html; charset=UTF-8");
?>
