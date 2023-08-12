<!doctype html>
<html lang="pt-br" id="theme">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sisaluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  </head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" > <h3> Sistema Acadêmico de Alunos Estudiosos </h3> </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <form class="form-check form-switch">
        <input  class="form-check-input" type="checkbox" role="switch" id="dark">
        <label class="form-check-label">Modo dark</label>
      </form>
    </div>
  </div>
</nav>


<div class="container mt-5">
     <a href="./aluno/cadaluno.php" class="btn btn-primary btn-lg">Cadastrar Aluno</a>
     <br><br>
     <a href="./aluno/listaalunos.php" class="btn btn-primary btn-lg">Lista de Alunos</a>
</div>

<div class="container mt-5">
     <a href="./professor/cadaprof.php" class="btn btn-primary btn-lg">Cadastrar Professores</a>
     <br><br>
     <a href="./professor/listaprof.php" class="btn btn-primary btn-lg">Lista de Professores</a>
</div>

<div class="container mt-5">
     <a href="./disciplina/caddisciplina.php" class="btn btn-primary btn-lg">Cadastro de Disciplinas</a>
     <br><br>
     <a href="./disciplina/listadisciplinas.php" class="btn btn-primary btn-lg">Lista de Disciplinas</a>
</div>

<div class="container mt-5">
     <a href="./nota/cadnota.php" class="btn btn-primary btn-lg">Notas</a>
     <br><br>
     <a href="./nota/listanota.php" class="btn btn-primary btn-lg">Lista de Notas</a>
</div>

<script type="text/javascript" src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
