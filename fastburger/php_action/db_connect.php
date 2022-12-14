<!-- CONEXÃO COM O BANCO -->
<?php
    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $db_name        = "lanchonete";

    $connect = mysqli_connect($servername, $username, $password, $db_name);
    if(mysqli_connect_error($connect)){
        echo "Erro na conexão! ".mysqli_connect_error();
    }
?>