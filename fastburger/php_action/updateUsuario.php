<!-- Atualização de Usuario -->
<?php
require_once 'db_connect.php';
$id = $_POST['codigo'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpfcnpj = $_POST['cpfcnpj'];
$email = $_POST['email'];
$tipoUsuario = $_POST['tipoUsuario'];
$sql = "UPDATE usuario SET usu_nome='$nome',usu_senha='$senha',usu_cpf_cnpj='$cpfcnpj', usu_email='$email',usu_tipo_usu='$tipoUsuario' WHERE usu_cod='$id'";
if (mysqli_query($connect, $sql)) {
    echo "Atualizado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Não foi possivel atualizar, Tente novamente!";
}
