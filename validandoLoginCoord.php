<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios1 WHERE cpf = '$cpf' and senha = '$senha'";

        $result1 = $conexao->query($sql);
        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result1) < 1)
        {
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: loginCoord.php');
        }
        else
        {
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            header('Location: sistemacoord.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: loginCoord.php');
    }
    
?>