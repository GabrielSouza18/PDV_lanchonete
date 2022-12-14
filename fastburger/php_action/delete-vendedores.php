<?php
    require_once 'db_connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM vendedores WHERE id=$id";
        if(mysqli_query($connect, $sql)){
            echo "Deletado com sucesso!";
            header('Location:../vendedores.php');
        }
        else{
            echo "Erro ao deletar!";
        }
    }
?>