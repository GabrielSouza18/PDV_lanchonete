<?php
session_start();


include('db_connect.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../login.php');
}


$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

//md5('$senha')
$query = "SELECT * FROM usuario WHERE usu_nome='$usuario' and usu_senha='$senha'";


$result = mysqli_query($connect, $query);

$row = mysqli_num_rows($result); //Resultado for 1, existe no banco



if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: ../index.html');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../login.php');
    exit();
}
