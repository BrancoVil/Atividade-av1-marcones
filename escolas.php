<?php

    if(isset($_POST['submit']))//se existir a variavel submit devera salvar no bando de dados
    {
        include_once('config.php');
        //passando os paramentro para suas variaveis
        $escola = $_POST['escola'];
        $responsavel = $_POST['responsavel'];
        $localidade = $_POST['localidade'];

        //query de insert, inserir na tabela os dados para seus devidos lugares
        $result3 = mysqli_query($conexao, "INSERT INTO escolas(escola,responsavel,localidade) 
        VALUES ('$escola','$responsavel','$localidade')");

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
        <form action="escolas.php" method="POST">

                <h1><b>Cadastro de Escolas</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="escola" id="escola" class="inputUser" required>
                    <label for="escola" class="labelInput">Nome da escola</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="responsavel" id="responsavel" class="inputUser" required>
                    <label for="responsavel" class="labelInput">Responsável</label>
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