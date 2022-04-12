<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $escola = $_POST['escola'];
        $responsavel = $_POST['responsavel'];
        $localidade = $_POST['localidade'];
        
        $sqlUpdate = "UPDATE escolas SET escola='$escola',responsavel='$responsavel',localidade='$localidade'
        WHERE id=$id";

        $result3 = $conexao->query($sqlUpdate);

    }
    header('Location: sistema.php');

?>