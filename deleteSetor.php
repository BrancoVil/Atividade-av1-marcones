<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM setores WHERE id=$id";//select pra verificar se existe o id

        $result2 = $conexao->query($sqlSelect);

        if($result2->num_rows > 0)//se o numero de linhas for maior que zero= existe entao sera apagado
        {
            $sqlDelete = "DELETE FROM setores WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>