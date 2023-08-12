<?php
require_once('../conexao.php');

if (isset($_POST['submit'])) {
    $id_aluno = $_POST['aluno'];
    $id_disciplina = $_POST['disciplina'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $sql_insert_nota = "INSERT INTO Nota (id_aluno, id_disciplina, nota1, nota2) VALUES (:id_aluno, :id_disciplina, :nota1, :nota2)";
    $stmt_insert_nota = $conexao->prepare($sql_insert_nota);
    $stmt_insert_nota->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);
    $stmt_insert_nota->bindParam(':id_disciplina', $id_disciplina, PDO::PARAM_INT);
    $stmt_insert_nota->bindParam(':nota1', $nota1, PDO::PARAM_STR);
    $stmt_insert_nota->bindParam(':nota2', $nota2, PDO::PARAM_STR);
    $stmt_insert_nota->execute();

   
    header("Location: listanota.php");
    exit();
}
?>
