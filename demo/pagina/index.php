<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo - HOME</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>Escola Virtual</h2>
    <nav style="border-bottom: 1px solid black;">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="empresa.php">Empresa</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
    </nav>
    <main style="padding: 21px;">
      <p><strong>Lista de Cursos Disponíveis:</strong></p>
      <ul>
        <li>Eng. Comp</li>
        <li>Eng. Software</li>
        <li>Fake</li>
      </ul>

      <br />
      <form action="?" method="post" style="border-top: 1px solid black; padding-top: 16px;">
        <fieldset>
          <div class="form-group">
            <label for="nomeCurso">Adicionar novo Curso:</label>
            <input type="text" id="nomeCurso" name="name" class="form-control" />
          </div>
          <button class="btn btn-primary btn-lg">Cadastrar Curso</button>
        </fieldset>
      </form>
    </main>
    <br />
    <footer style="border-top: 1px solid black; padding: 16px;">
      Todos os direitos reservados - SATC - 1999
    </footer>
  </div>
</body>
</html>
