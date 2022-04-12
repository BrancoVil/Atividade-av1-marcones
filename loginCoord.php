<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <link rel="icon" href="assets/img/icon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Tela de login</title>


</head>
<body>
<a href="index.php">Voltar</a>   
    <div>
        <h1>Login</h1>
        <form action="validandoLoginCoord.php" method="POST">
        <input type="text" name="cpf" placeholder="CPF" onkeypress="$(this).mask('000.000.000-00');" > 
        <br><br>
        <input type="password" name="senha" placeholder="SENHA">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        <br><br><br>

        </form>
    </div>

</body>
</html>