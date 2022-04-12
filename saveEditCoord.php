<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $tipo = $_POST['tipo'];
        
        $sqlUpdate = "UPDATE usuarios1 SET cpf='$cpf',senha='$senha',nome='$nome',telefone='$telefone',tipo='$tipo'
        WHERE id=$id";

        $result1 = $conexao->query($sqlUpdate);

    }
    header('Location: sistema.php');

?>