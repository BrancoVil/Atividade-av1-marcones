<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cpf']);
        unset($_SESSION['senha']);
        header('Location: loginCoord.php');
    }
    $logado = $_SESSION['cpf']; 

    $sql = "SELECT * FROM visita ORDER BY id ASC";

    $result4 = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/styleSistema.css">
   <link rel="icon" href="assets/img/icon.png">
    <title>Sistema</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/img/icon.png" alt="" width="40" height="40">
              Centro Universitário Maurício de Nassau</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <br>
    <?php
        echo "<h1>Bem vindo Coordenador <u>$logado</u></h1>";
    ?>
    <br>
    <section class="container">
        <div class="dropdown">
              <a class="btn btn-success text-center" href="#"  id="refresh" role="button" data-bs-target="#multiCollapseExample2" aria-expanded="false">
                Atualizar

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                </svg>

              </a>

          
            <a href="visita.php" class="btn btn-secondary text-center" type="button" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Visitas

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
            </a>

            <a href="relatorio.php" class="btn btn-secondary text-center" type="button" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Relatórios

              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg>
            </a> 
            
              <a href="sair.php" class="btn btn-danger text-center" type="button">Sair</a>
      
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Setores</a></li> 
                <li><a class="dropdown-item" href="#">Escolas</a></li>
              </ul>
        </div>
        <br><br>
  <div class="container">
    <table class="table table-striped">
      <thead>
            <tr class="table-dark">
              <th scope="col">#</th>
              <th scope="col">Coordenador</th>
              <th scope="col">Setor</th>
              <th scope="col">Escola</th>
              <th scope="col">Quantidade de alunos</th>
              <th scope="col">Conteudo do dia</th>
              <th scope="col">Professor</th>
              <th scope="col">Data da visita</th>
            </tr>
      </thead>
    
</div>

<tbody>
        <?php
        while($user_data = mysqli_fetch_assoc($result4)) 
        {
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['coordenador']."</td>";
            echo "<td>".$user_data['setor']."</td>";
            echo "<td>".$user_data['escola']."</td>";
            echo "<td>".$user_data['quantidadedealunos']."</td>";
            echo "<td>".$user_data['conteudododia']."</td>";
            echo "<td>".$user_data['professor']."</td>";
            echo "<td>".$user_data['datavisita']."</td>";

            
        }
        ?>
  </tbody>
  </table>

        <script src="assets/js/reload.js"></script>
</body>
</html>