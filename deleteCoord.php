<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM usuarios1 WHERE id=$id";

        $result1 = $conexao->query($sqlSelect);

        if($result1->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios1 WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>