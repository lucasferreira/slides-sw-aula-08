<?php
session_start();

if(!isset($_SESSION['contador'])) {
  $_SESSION['contador'] = 0;
}

$_SESSION['contador'] = (int)$_SESSION['contador'] + 1;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teste</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

  <?php
  define("SOBRENOME", "Ferreira");

  $nome = "Lucas";
  ?>
  <h1>Olá <?php echo $nome; ?> <?php echo SOBRENOME; ?></h1>

  <p>Qual? <?php echo $_GET['teste']; ?></p>
  <p>Qual? <?php echo $_REQUEST['outra']; ?></p>

  <p>Contagem: <?php echo $_SESSION['contador']; ?></p>

  <p>Endereço: <?php echo $_SERVER['REMOTE_ADDR'] ?></p>

  <h2>Array</h2>
  <?php
  $pessoas = array("José", "João", "João", "João");
  ?>

  <p>Por enquanto <?php print_r($pessoas); ?></p>

  <?php array_push($pessoas, "Lucas"); ?>

  <p>Por enquanto <?php print_r($pessoas); ?></p>

  <p>Contagem <?php print_r( count($pessoas) ); ?></p>

  <p>Pedaço <?php print_r( array_slice($pessoas, 1, 3) ); ?></p>

  <p>Limpo <?php print_r( array_unique($pessoas) ); ?></p>

  <?php
  $pessoa = array(
    "nome" => "Lucas",
    "idade" => 17
  );
  ?>

  <p>Chaves do array: <?php print_r( array_keys($pessoa) ); ?></p>
  <p>Valores do array: <?php print_r( array_values($pessoa) ); ?></p>

  <?php if($pessoa["idade"] >= 18) { ?>
  <p>Sim é maior de 18 anos</p>
  <?php } else { ?>
  <p style="color: red;">Menor de idade</p>
  <?php } ?>

  <?php
  $numeros = array(100, 2, 1, 5, 10, 20);
  ?>

  <p>Números <?php print_r($numeros); ?></p>

  <?php sort($numeros); ?>

  <p>Números Ordenados <?php print_r($numeros); ?></p>

  <h3>For</h3>

  <?php
  for ($passo = 0; $passo < 5; $passo++) {
    echo "<p>Andou {$passo} passos</p>";
  }
  ?>

  <h4>For dos números</h4>
  <?php
  for($n = 0; $n < count($numeros); $n++) {
    echo "<p>Número {$numeros[$n]}</p>";
  }
  ?>

  <h4>Foreach dos números</h4>
  <?php
  foreach($numeros as $numero) {
    echo "<p>Número {$numero}</p>";
  }
  ?>

  <h3>Funções</h3>
  <?php
  function square($numero) {
    return $numero * $numero;
  }
  ?>

  <p>Quadrática: <?php echo square(5); ?></p>

  <h3>Classes</h3>

  <?php
  class Pessoa {

    public $nome = null;
    public $idade = 0;

    public function __construct($nome, $idade) {
      $this->nome = $nome;
      $this->idade = $idade;
    }

    public function saudacao() {
      echo "Olá " . $this->nome . " sua idade é " . $this->idade;
    }

  }

  class Trabalhador extends Pessoa {
    public $empresa = null;

    public function __construct($nome, $idade, $empresa = null) {
      parent::__construct($nome, $idade);

      $this->empresa = $empresa;
    }

    public function saudacao() {
      echo "Olá " . $this->nome . " sua idade é " . $this->idade . " e você trabalha em " . $this->empresa;
    }
  }


  $lucas = new Pessoa("Lucas", 33);
  $jonas = new Trabalhador("Jonas", 53, "SATC");
  ?>

  <p>Nome da pessoa: <?php echo $lucas->nome; ?></p>
  <p>Idade da pessoa: <?php echo $lucas->idade; ?></p>
  <p><?php echo $lucas->saudacao(); ?></p>

  <p><?php echo $jonas->saudacao(); ?></p>

</body>
</html>
