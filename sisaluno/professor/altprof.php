<!DOCTYPE html>
<html lang="pt-br" id="theme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Document</title>
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

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];


   $sql = "SELECT * FROM professor where id= :id";
   

   $retorno = $conexao->prepare($sql);


   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   
   $retorno->execute();

  
   $array_retorno=$retorno->fetch();
   

   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $estatus = $array_retorno['estatus'];
   $endereco = $array_retorno['endereco'];
   $cpf = $array_retorno['cpf'];

   


?>
<div class="container-sm py-5 h-100">
  <form method="POST" action="crudprof.php">
  <label class="form-label"for="">Nome do Professor</label>
        <input class="form-control" type="text" name="nome" id="" required value=<?php echo $nome?> >
  <label class="form-label" for="">Idade</label>                                       
        <input class="form-control"  type="number" name="idade" id="" min="18" max="100"  required value=<?php echo $idade ?> >
        <input class="form-control"  type="hidden" name="id" id="" value=<?php echo $id ?> >
  <label class="form-label" for="">Data de nascimento</label>     
        <input class="form-control"  type="text" name="datanascimento" required id="" value=<?php echo $datanascimento?> >
<br>
        <label>Professor está ativo</label><br>
    <label class="form-label" for="radiov">Verdadeiro</label>
    <input type="radio" id="radiov" required name="estatus" value="ativo" <?php echo ($estatus === 'ativo') ? 'checked' : '' ?>>
        
    <br> <label class="form-label" for="radioF">Falso</label>
    <input  type="radio" id="radioF" required name="estatus" value="desativo" <?php echo ($estatus === 'desativo') ? 'checked' : '' ?>>
    <br><br>
  <label class="form-label" for="">Endereço</label>                 
<input class="form-control"  type="text" name="endereco" id="" required value=<?php echo $endereco ?> >
  <label class="form-label" for="">CPF</label>                          
        <input class="form-control"  type="text" name="cpf" id="" required value=<?php echo $cpf ?> >
        <br>
        <input class="btn btn-success" type="submit" name="update" value="Alterar">
  </form>
  </div>

  <script type="text/javascript" src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>