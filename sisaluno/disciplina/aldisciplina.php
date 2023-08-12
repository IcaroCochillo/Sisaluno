<!doctype html>
<html lang="pt-br" id="theme" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   
  </head>
<body>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <a class="navbar-brand" > <h3> Lista de Alunos Matriculados </h3> </a>

          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
       
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <form class="form-check form-switch">
        <input  class="form-check-input" type="checkbox" role="switch" id="dark">
        <label class="form-check-label">Modo dark</label>
      </form>
    </div>
  </div>
</nav>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

  
   $sql = "SELECT * FROM disciplina where id= :id";
   

   $retorno = $conexao->prepare($sql);


   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

  
   $retorno->execute();

  
   $array_retorno=$retorno->fetch();
   
  
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];
   


?>

<form method="POST" action="cruddisciplina.php" class="row g-3 align-items-center">
<br><br><br><br><label for="nomedisciplina" class="form-label">Nome da Disciplina</label>
    <input type="text" name=" nomedisciplina" required id=" nomedisciplina" value="<?php echo $nomedisciplina ?>" >

    <label for="ch" class="form-label">Carga Horaria</label>                                       
    <input type="number" class="form-control" name="ch" id="ch" min="20" max="80" required value="<?php echo $ch ?>" >
    
    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" >

    <label for="semestre" class="form-label">Semestre</label>     
    <input type="text" class="form-control" name="semestre" id="semestre" required value="<?php echo $semestre ?>" >


    <label for="idprofessor" class="form-label">Professor ministrante</label>                          
    <input type="text" class="form-control" name="idprofessor" id="idprofessor" required value="<?php echo $idprofessor ?>" >

    <input type="submit" class="btn btn-primary btn-lg" name="update" value="Alterar">
</form>

<script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>