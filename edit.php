<?php
    include_once('config.php');

    if(!empty($_GET['id'])) // verifica se não tiver vazia (!empty) parametro id, pegando pelo GET que ta na url
    {
        $id = $_GET['id']; //criando variavel id que vai receber o paramentro
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id"; //condição onde o id seja igual a variavel id que esta vindo do parametro
        $result = $conexao->query($sqlSelect); // envia os dados pra variavel result do banco de dados
        if($result->num_rows > 0) // verificacao se nao for maior que zero esse regisrto não existe
        {
            while($user_data = mysqli_fetch_assoc($result)) //se existir, retorna uma matriz associativa
            {
                $cpf = $user_data['cpf'];
                $senha = $user_data['senha'];
                $nome = $user_data['nome'];
                $telefone = $user_data['telefone'];
                $tipo = $user_data['tipo'];
            }
        }
        else //esse regisrto não exite e volta pra tela do sistema
        {
            header('Location: sistema.php');
        }
    }
    else //caso não exista o id
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
        <form action="saveEdit.php" method="POST">

                <h1><b>Editar Administrador</b></h1>
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
                <input type="radio" id="administrador" name="tipo" value="Administrador" <?php echo $tipo == 'administrador' ? 'checked' : '';?> required> <!-- verificação ternario -->
                <label for="administrador">Administrador</label>
                <br>
                <input type="radio" id="coordenador" name="tipo" value="Coordenador" <?php echo ($tipo == 'coordenador') ? 'checked' : '';?> required>
                <label for="coordenador">Coordenador</label>
                <br><br>
                        <input type="hidden" name="id" value=<?php echo $id;?>> <!--pegando o id-->
                <input type="submit" name="update" id="submit">
        </form>
    </div>
</body>
</html>