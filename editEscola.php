<?php
    include_once('config.php');

    if(!empty($_GET['id'])) //
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM escolas WHERE id=$id";
        $result3 = $conexao->query($sqlSelect);
        if($result3->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result3))
            {
                $escola = $user_data['escola'];
                $responsavel = $user_data['responsavel'];
                $localidade = $user_data['localidade'];
        
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
        
</head>
<body>
    <a href="sistema.php">Voltar</a>
    
    <div class="box">
        <form action="saveEditEscola.php" method="POST">

                <h1><b>Editar Escolas</b></h1>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="escola" id="escola" class="inputUser" value="<?php echo $escola ?>" required>
                    <label for="escola" class="labelInput">Nome da escola</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="responsavel" id="responsavel" class="inputUser" value="<?php echo $responsavel ?>" required>
                    <label for="responsavel" class="labelInput">Responsável</label>
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