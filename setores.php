<?php

    if(isset($_POST['submit']))//se existir a variavel submit devera salvar no bando de dados
    {
        include_once('config.php');
        //passando os paramentro para suas variaveis
        $descricao = $_POST['descricao'];
        $setor = $_POST['setor'];
        $localidade = $_POST['localidade'];

        //query de insert, inserir na tabela os dados para seus devidos lugares
        $result2 = mysqli_query($conexao, "INSERT INTO setores (descricao,setor,localidade) 
        VALUES ('$descricao','$setor','$localidade')");

        header('Location: sistema.php');
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
    <a href="sistema.php">Voltar</a>
    
    <div class="box">
        <form action="setores.php" method="POST">

                <h1><b>Cadastro de Setores</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="setor" id="setor" class="inputUser" required>
                    <label for="setor" class="labelInput">Nome do setor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="localidade" id="localidade" class="inputUser" required>
                    <label for="localidade" class="labelInput">Localidade</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>