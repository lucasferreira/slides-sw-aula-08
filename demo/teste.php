<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Teste</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
  <?php
  if(!isset($_SESSION['contagem'])) {
    $_SESSION['contagem'] = 0;
  }

  $_SESSION['contagem'] = $_SESSION['contagem'] + 1;

  echo "<p>Vistas: " . $_SESSION['contagem'] . "</p>";

  if(!empty($_SESSION['nome'])) {
    echo "<p>Bem-vindo de volta " . $_SESSION['nome'] . "</p>";
  }
  ?>

  <?php
  if(!empty($_POST['nome']))
  {
    $_SESSION['nome'] = $_POST['nome'];

    echo "<p>Nome enviado foi: " . $_POST['nome'] . " / " . $_POST['email'] . "</p>";
  }
  ?>

  <form action="teste.php" method="post">
    <input type="text" name="nome" placeholder="Seu nome" />
    <input type="text" name="email" placeholder="Seu e-mail" />
    <button type="submit">Enviar</button>
  </form>

  <?php
  $pessoa = array(
    "nome" => "Lucas",
    "idade" => 34
  );

  echo $pessoa["idade"] . "<br /><br />";

  $items = array(4, 2, 1, 3);
  print_r($items);
  echo "<br />";

  $items[] = 5;
  print_r($items);
  echo "<br />";

  array_push($items, 6);
  print_r($items);
  echo "<br /><br />";

  sort($items);
  print_r($items);
  echo "<br /><br />";

  for($i=0; $i < count($items); $i++) {
    echo $items[$i] . "<br />";
  }

  function square($numero) {
    $conta = $numero * $numero;
    return $conta;
  }

  $resultado = square(5);
  echo $resultado . "<br /><br />";

  class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
      $this->nome = $nome;
      $this->idade = $idade;

      if($this->idade < 18) {
        throw new Exception("Menores de idade não podem rodar esse script");
      }
    }

    public function comprimenta() {
      return "Olá " . $this->nome . " você têm " . $this->idade . " anos de vida";
    }
  }

  $lucas = new Pessoa("Lucas", 34);
  echo $lucas->comprimenta() . "<br />";

  class Professor extends Pessoa {
    public $curso;

    public function __construct($nome, $idade, $curso) {
      parent::__construct($nome, $idade);

      $this->curso = $curso;
    }

    public function comprimenta() {
      return "Olá " . $this->nome . " você têm " . $this->idade . " anos de vida e da aula no curso " . $this->curso;
    }
  }

  $profLucas = new Professor("Lucas", 34, "Eng. Comp");
  echo $profLucas->comprimenta();
  ?>
</body>
</html>
