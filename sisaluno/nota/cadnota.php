<!doctype html>
<html lang="pt-br" id="theme" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
 
  </head>
<body>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" ><h3> Sistema de Cadrastro de Notas</h3></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"></a>
        </li>
      </ul>
      <label class="form-check-label">Modo dark</label>
      <form class="form-check form-switch">
        <input  class="form-check-input" type="checkbox" role="switch" id="dark">
      </form>
    </div>
  </div>
</nav>



<div class="container-sm py-5 h-100">
<h1>Cadastrar Nota</h1>
    <form method="POST" class="form-label" action="crudnota.php">
    <div class="mb-3">
        <label for="aluno">Aluno:</label>
        <select class="form-select" name="aluno" required>
        </div>

            <?php
            require_once('../conexao.php');

            $sql_alunos = "SELECT id, nome FROM Aluno";
            $stmt_alunos = $conexao->prepare($sql_alunos);
            $stmt_alunos->execute();
            $alunos = $stmt_alunos->fetchAll(PDO::FETCH_ASSOC);

            foreach ($alunos as $aluno) {
                echo "<option value='{$aluno['id']}'>{$aluno['nome']}</option>";
            }
            ?>
        </select><br>
        <label for="disciplina">Disciplina:</label>
        <select class="form-select" name="disciplina" required>
            <?php
            $sql_disciplinas = "SELECT id, nomedisciplina FROM Disciplina";
            $stmt_disciplinas = $conexao->prepare($sql_disciplinas);
            $stmt_disciplinas->execute();
            $disciplinas = $stmt_disciplinas->fetchAll(PDO::FETCH_ASSOC);

            foreach ($disciplinas as $disciplina) {
                echo "<option value='{$disciplina['id']}'>{$disciplina['nomedisciplina']}</option>";
            }
            ?>
        </select><br>
        <label for="nota1">Nota 1:</label>
        <input class="form-control" type="number" name="nota1" min="0" max="10" step="0.01" required><br>
        <label for="nota2">Nota 2:</label>
        <input class="form-control" type="number" name="nota2" min="0" max="10" step="0.01" required><br>
        <input type="submit" name="submit" value="Cadastrar Nota" class="btn btn-success">
    </form>

    </div>


<script type="text/javascript" src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>




