<!DOCTYPE html>
<html lang="pt-br" id="theme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<br><br><br><br>
<?php
require_once('../conexao.php');


if(isset($_GET['cadastrar'])){
     
        $nomedisciplina = $_GET["nomedisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        $idprofessor = $_GET["idprofessor"];
        
        $sql = "INSERT INTO disciplina(nomedisciplina,ch,semestre,idprofessor) 
                VALUES('$nomedisciplina','$ch','$semestre','$idprofessor')";

        $sqlcombanco = $conexao->prepare($sql);

        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> a disciplina
                $nomedisciplina foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='../index.php'>voltar</a></button>";
            }
        }
if(isset($_POST['update'])){

    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $id = $_POST["id"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST["idprofessor"];
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id ";
   

    $stmt = $conexao->prepare($sql);


    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_INT);
    $stmt->bindParam(':semestre', $semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> a disciplina
             $nomedisciplina foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listadisciplinas.php'>voltar</a></button>";
        }

}        


?>
<?php



if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    
    if (isset($_GET['confirmar']) && $_GET['confirmar'] === 'sim') {

        $sql = "DELETE FROM `disciplina` WHERE id={$id}";
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        echo "<strong>OK!</strong> A disciplina $id foi excluída!!!"; 
        echo "<button class='button'><a href='listadisciplinas.php'>Voltar</a></button>";
    } else {
        echo "<h2>Confirmar Exclusão</h2>";
        echo "<p>Tem certeza que deseja excluir a disciplina?</p>";
        echo "<button class='button'><a href=\"cruddisciplina.php?excluir=1&id={$id}&confirmar=sim\">Sim</a></button>";
        echo "<button class='button'><a href='listadisciplinas.php'>Não</a></button>";
    }
}
?>



<script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
</html>

