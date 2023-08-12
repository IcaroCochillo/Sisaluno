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
    <a class="navbar-brand" ><h3> Sistema de Cadrastro </h3></a>
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
      <form class="form-check form-switch">
        <input  class="form-check-input" type="checkbox" role="switch" id="dark">
        <label class="form-check-label">Modo dark</label>
      </form>
    </div>
  </div>
</nav>

<div class="container-sm py-5 h-100">
    <form method="GET" action="cruddisciplina.php">
   
    <div class="mb-3">
    <label for="nomedisciplina">Nome da Disciplina</label>
    <input type="text" class="form-control" name=" nomedisciplina" required id=" nomedisciplina">
    </div>

    <div class="mb-3">
    <label for="ch">Carga Horaria</label>                                       
    <input type="number" class="form-control" name="ch" id="ch" min="20" max="80" required>
    </div>

    <div class="mb-3">
    <label for="semestre">Semestre</label>     
    <input type="text" class="form-control" name="semestre" id="semestre" required >
    </div>

    <div class="mb-3">
    <label for="idprofessor">ID Professor ministrante</label>                          
    <input type="text" class="form-control" name="idprofessor" id="idprofessor" required >
    </div>

    <input type="submit" name="cadastrar" class="btn btn-success" value="Cadastrar">
</form>

</div>
<script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>