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
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET["datanascimento"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];
        $cpf = $_GET["cpf"];

        $sql = "INSERT INTO professor(nome,idade,datanascimento,endereco,estatus,cpf) 
                VALUES('$nome','$idade','$datanascimento',' $endereco','$estatus','$cpf')";

        $sqlcombanco = $conexao->prepare($sql);

        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='../index.php'>voltar</a></button>";
            }
        }
if(isset($_POST['update'])){

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $cpf = $_POST["cpf"];
   
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, estatus= :estatus, cpf= :cpf WHERE id= :id ";
   
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento', $datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_BOOL);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
        }

}        
?>


<?php
if (isset($_GET['excluir'])) {
    $id = $_GET['id'];

    $sql_delete_disciplinas = "DELETE FROM Disciplina WHERE idprofessor = ?";
    $stmt_delete_disciplinas = $conexao->prepare($sql_delete_disciplinas);
    $stmt_delete_disciplinas->execute([$id]);

    if (isset($_GET['confirmar']) && $_GET['confirmar'] === 'sim') {
        $sql = "DELETE FROM `professor` WHERE id={$id}";
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        echo "<strong>OK!</strong> O professor $id foi excluído!!!"; 
        echo "<button class='button'><a href='listaprof.php'>Voltar</a></button>";
    } else {

    }
}
        
?>

    <title>Confirmar Exclusão</title>

    <h2>Confirmar Exclusão</h2>
    <p>Tem certeza que deseja excluir o professor?</p>

    
    <button class='button'><a href="crudprof.php?excluir=1&id=<?php echo $id ?>&confirmar=sim">Sim</a></button>
    <button class='button'><a href="listaprof.php">Não</a></button>

<script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>

