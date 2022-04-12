<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $tipo = $_POST['tipo'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios1(cpf,senha,nome,telefone,tipo) 
        VALUES ('$cpf','$senha','$nome','$telefone','$tipo')");

        header('Location: loginCoord.php');
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
    <!--mascara de campos-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    
    <div class="box">
        <form action="formularioCoord.php" method="POST">

                <h1><b>Cadastro de Coordenador</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" onkeypress="$(this).mask('000.000.000-00');" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" onkeypress="$(this).mask('(00) 0-0000-0009')" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Tipo:</p>
                <input type="radio" id="adm" name="tipo" value="adm" required>
                <label for="adm">Administrador</label>
                <br>
                <input type="radio" id="coordenador" name="tipo" value="Coordenador" required>
                <label for="coordenador">Coordenador</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>