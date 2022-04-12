<?php
    include_once('config.php');

    if(!empty($_GET['id'])) //
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios1 WHERE id=$id";
        $result1 = $conexao->query($sqlSelect);
        if($result1->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result1))
            {
                $cpf = $user_data['cpf'];
                $senha = $user_data['senha'];
                $nome = $user_data['nome'];
                $telefone = $user_data['telefone'];
                $tipo = $user_data['tipo'];
            }
        }
        else
        {
            header('Location: sistema.php');
        }
    }
    else
    {
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
    <!--mascara de campos-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <a href="sistema.php">Voltar</a>
    
    <div class="box">
        <form action="saveEditCoord.php" method="POST">

                <h1><b>Editar Coordenador</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" onkeypress="$(this).mask('000.000.000-00');" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" onkeypress="$(this).mask('(00) 0-0000-0009')" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Tipo:</p>
                <input type="radio" id="administrador" name="tipo" value="Administrador" <?php echo $tipo == 'administrador' ? 'checked' : '';?> required>
                <label for="administrador">Administrador</label>
                <br>
                <input type="radio" id="coordenador" name="tipo" value="Coordenador" <?php echo ($tipo == 'coordenador') ? 'checked' : '';?> required>
                <label for="coordenador">Coordenador</label>
                <br><br>
                        <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
        </form>
    </div>
</body>
</html>