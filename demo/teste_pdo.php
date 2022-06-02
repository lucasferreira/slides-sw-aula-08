<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  	try {
  		$db = new PDO('mysql:host=host.docker.internal;dbname=satc;charset=utf8mb4', "root", "123456");
  	}
  	catch (PDOException $err)
  	{
  		echo 'Erro ao conectar com o MySQL: ' . $err->getMessage();
  		exit;
  	}

  	$id = 2;

  	$stmt = $db->prepare("SELECT * FROM alunos WHERE id = :id");
  	$stmt->bindParam(':id', $id);
  	$stmt->execute();

  	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  	echo "<ul>";
  	foreach ($rows as $row)
  	{
  		echo "<li><strong>" . $row['nome'] . "</strong> - <a href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></li>";
  	}
  ?>
</body>
</html>
