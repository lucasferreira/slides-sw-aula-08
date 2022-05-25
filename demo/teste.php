<?php
$nome = "Lucas";
$sobrenome = "Ferreira";
$idade = 33;

$linguagens = array(
	"JavaScript",
	"PHP",
	"Node.js",
); // ou ["JavaScript", "PHP"];

array_push($linguagens, "Python");

$linguagens[] = "Java";
$linguagens[] = "HTML";
$linguagens[] = "CSS";

$outrasLangs = array_slice($linguagens, 4, 2);

sort($linguagens);

echo "<pre>";
print_r($linguagens);
print_r($outrasLangs);
echo "</pre>";

echo count($linguagens) . "<br />";

if (in_array("HTML", $linguagens))
{
	echo "Achou!" . "<br />";
}
else
{
	echo "Não achou =(" . "<br />";
}

for ($i = 0; $i < count($linguagens); $i++)
{
	echo "Lang " . ($i + 1) . ": " . $linguagens[$i] . "<br />";

	if ($linguagens[$i] === "Java")
	{
		break;
	}
}

echo "<br />";

$pessoa = array(
	"nome" => "Lucas",
	"email" => "lucas.ferreira@satc.edu.br",
	"idade" => 33,
);

echo $pessoa["email"] . "<br />";

function soma($n1, $n2)
{
	$resultado = $n1 + $n2;

	return $resultado;
}

echo soma(3, 3);
?>
