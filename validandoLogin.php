<?php
    session_start();

    //se existir uma variavel post submit ele vai acessar o sistema
    //não pode ta vazia variavel post cpf e senha
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');// conexao do banco 
        $cpf = $_POST['cpf'];//variavel cpf e senha que vem do paramentro post
        $senha = $_POST['senha'];

        //verificando se os paramentros existem no banco de dados
        $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' and senha = '$senha'";

        $result = $conexao->query($sql);//executando query no banco


        if(mysqli_num_rows($result) < 1)//verificar se o numero de linhas da varaivel result for menor que 1 = não existe e volta pra tela de login
        {
            unset($_SESSION['cpf']);//caso não exista registro sera destruida
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else // existe e manda pro sistema
        {
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        //se não existir nenhuma variavel não acessa e volta pra o login
        header('Location: login.php');
    }
?>