<?php
    require_once 'db_connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM produtos WHERE id=$id";
        if(mysqli_query($connect, $sql)){
            echo "Deletado com sucesso!";
            header('Location:../produto.php');
        }
        else{
            echo "Erro ao deletar!";
        }
    }
?>