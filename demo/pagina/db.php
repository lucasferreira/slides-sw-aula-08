<?php
$conexao = mysqli_connect("host.docker.internal", "root", "123456", "satc");

mysqli_set_charset($conexao, "utf8mb4");

if(!$conexao) {
  echo "ERRO: Não foi possível conectar em seu banco de dados";
  exit;
}
?>
