<?php
    require_once 'db_connect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM clientes WHERE id='$id'";
        if(mysqli_query($connect, $sql)){
            echo "Deletado com sucesso!";
            header('Location:../clientes.php');
        }
        else{
            echo "Erro ao deletar!";
        }
    }
?>