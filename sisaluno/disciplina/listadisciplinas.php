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

    <div class="container">
        <?php
        require_once('../conexao.php');

        $retorno = $conexao->prepare('SELECT * FROM disciplina');
        $retorno->execute();
        ?>
<br><br><br><br><br><br><br>
        <table class="table table-striped-columns"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>CARGAHORARIA</th>
                    <th>SEMESTRE</th>
                    <th>ID DO PROFESSOR MINISTRANTE</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($retorno->fetchAll() as $value) { ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['nomedisciplina']; ?></td>
                        <td><?php echo $value['ch']; ?></td>
                        <td><?php echo $value['semestre']; ?></td>
                        <td><?php echo $value['idprofessor']; ?></td>
                        <td>
                            <form method="POST" action="aldisciplina.php">
                                <input name="id" type="hidden" value="<?php echo $value['id']; ?>"/>
                                <button name="alterar"  class="btn btn-primary btn-lg"type="submit" class="button">Alterar</button>
                            </form>
                        </td>
                        <td>
                <form method="GET" action="cruddisciplina.php">
                    <input name="id" type="hidden" value="<?php echo $value['id']; ?>"/>
                    <button name="excluir" class="btn btn-primary btn-lg" type="submit" class="button">Excluir</button>
                </form>
            </td>
        </tr>
    <?php } ?> 
</tbody>
        </table> 
    

    </div>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>