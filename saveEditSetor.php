<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $descricao = $_POST['descricao'];
        $setor = $_POST['setor'];
        $localidade = $_POST['localidade'];
        
        $sqlUpdate = "UPDATE setores SET descricao='$descricao',setor='$setor',localidade='$localidade'
        WHERE id=$id";

        $result2 = $conexao->query($sqlUpdate);

    }
    header('Location: sistema.php');

?>