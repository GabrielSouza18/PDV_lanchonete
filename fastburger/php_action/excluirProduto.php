<!-- Exclusão de cliente -->
<?php
    require_once 'db_connect.php';

        $codigo = $_GET['id'];

        $sql = "DELETE FROM produto WHERE pro_cod=$codigo";
        if(mysqli_query($connect, $sql)){
            echo "Deletado com sucesso!";
            header('Location:../index.html');
        }
        else{
            echo "Erro ao deletar!";
        }
   
?>