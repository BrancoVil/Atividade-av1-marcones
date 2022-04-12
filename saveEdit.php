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

        //verifica se existe o update com o post, se existir ele vai atualizar o registro, caso contratio ele vai voltar pra o sistema.php
        $sqlUpdate = "UPDATE usuarios SET cpf='$cpf',senha='$senha',nome='$nome',telefone='$telefone',tipo='$tipo'
        WHERE id=$id"; // condição

        $result = $conexao->query($sqlUpdate);

    }
    header('Location: sistema.php');

?>