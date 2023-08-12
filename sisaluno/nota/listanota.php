<!doctype html>
<html lang="pt-br" id="theme" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   
  </head>
<body>



<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <a class="navbar-brand" > <h3> Lista de Notas </h3> </a>

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

<br><br><br><br><br><br>

    <table class="table table-striped-columns">
        <tr>
            <th>Nome Aluno</th>
            <th>Nome Disciplina</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>
        </tr>
        <?php
        require_once('../conexao.php');

        $sql = "SELECT n.id_aluno, a.nome AS nome_aluno, n.id_disciplina, d.nomedisciplina AS nome_disciplina,
                n.nota1, n.nota2, (n.nota1 + n.nota2) / 2 AS media
                FROM Nota n
                INNER JOIN Aluno a ON n.id_aluno = a.id
                INNER JOIN Disciplina d ON n.id_disciplina = d.id
                ORDER BY a.nome, d.nomedisciplina";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['nome_aluno']}</td>";
                echo "<td>{$row['nome_disciplina']}</td>";
                echo "<td>{$row['nota1']}</td>";
                echo "<td>{$row['nota2']}</td>";
                echo "<td>{$row['media']}</td>";
                echo "</tr>";
            }
        } else {
            echo "Erro ao buscar notas no banco de dados.";
        }
        ?>
    </table>

    <div class="button-container">
            <a href="../index.php" class="btn btn-primary btn-lg">Voltar</a>
        </div>


    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
