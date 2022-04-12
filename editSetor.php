
<?php
    include_once('config.php');

    if(!empty($_GET['id'])) // verifica se não tiver vazia (!empty) parametro id, pegando pelo GET que ta na url
    {
        $id = $_GET['id']; //criando variavel id que vai receber o paramentro
        $sqlSelect = "SELECT * FROM setores WHERE id=$id"; //condição onde o id seja igual a variavel id que esta vindo do parametro
        $result2 = $conexao->query($sqlSelect); // envia os dados pra variavel result do banco de dados
        if($result2->num_rows > 0) // verificacao se nao for maior que zero esse regisrto não existe
        {
            while($user_data = mysqli_fetch_assoc($result2)) //se existir, retorna uma matriz associativa
            {
                $descricao = $user_data['descricao'];
                $setor = $user_data['setor'];
                $localidade = $user_data['localidade'];
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
        
</head>
<body>
    <a href="sistema.php">Voltar</a>
    
    <div class="box">
        <form action="saveEditSetor.php" method="POST">

                <h1><b>Cadastro de Setores</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" value="<?php echo $descricao ?>" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="setor" id="setor" class="inputUser" value="<?php echo $setor ?>" required>
                    <label for="setor" class="labelInput">Nome do setor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="localidade" id="localidade" class="inputUser" value="<?php echo $localidade ?>" required>
                    <label for="localidade" class="labelInput">Localidade</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
        </form>
    </div>
</body>
</html>