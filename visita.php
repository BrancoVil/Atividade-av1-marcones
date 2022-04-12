<?php

    if(isset($_POST['submit']))//se existir a variavel submit devera salvar no bando de dados
    {
        include_once('config.php');
        //passando os paramentro para suas variaveis
        $coordenador = $_POST['coordenador'];
        $setor = $_POST['setor'];
        $escola = $_POST['escola'];
        $quantidadedealunos = $_POST['quantidadedealunos'];
        $conteudododia = $_POST['conteudododia'];
        $professor = $_POST['professor'];
        $datavisita = $_POST['datavisita'];


        //query de insert, inserir na tabela os dados para seus devidos lugares
        $result4 = mysqli_query($conexao, "INSERT INTO visita(coordenador,setor,escola,quantidadedealunos,conteudododia,professor,datavisita) 
        VALUES ('$coordenador','$setor','$escola', '$quantidadedealunos', '$conteudododia', '$professor', '$datavisita'  )");

        header('Location: sistemacoord.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="assets/css/styleFormulario.css">
    <link rel="icon" href="assets/img/icon.png">
    
</head>
<body>
    <a href="sistemacoord.php">Voltar</a>
    
    <div class="box">
        <form action="visita.php" method="POST">

                <h1><b>Cadastrar Visitas</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="coordenador" id="coordenador" class="inputUser" required>
                    <label for="coordenador" class="labelInput">Coordenador</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="setor" id="setor" class="inputUser" required>
                    <label for="setor" class="labelInput">Setor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="escola" id="escola" class="inputUser" required>
                    <label for="escola" class="labelInput">Escola</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="quantidadedealunos" id="quantidadedealunos" class="inputUser" required>
                    <label for="quantidadedealunos" class="labelInput">Quantidade de alunos</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="conteudododia" id="conteudododia" class="inputUser" required>
                    <label for="conteudododia" class="labelInput">Conteudo do dia</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="professor" id="professor" class="inputUser" required>
                    <label for="professor" class="labelInput">Professor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="datavisita" id="datavisita" class="inputUser" required>
                    <label for="datavisita" class="labelInput">Data da visita</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>