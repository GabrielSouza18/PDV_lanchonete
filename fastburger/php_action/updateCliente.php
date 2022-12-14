<!-- Atualização de Cliente -->
<?php
require_once 'db_connect.php';
$id = $_POST['codigo'];
$nome = $_POST['nome'];
$cpfcnpj = $_POST['cpfcnpj'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$observacao = $_POST['observacao'];
$uf = $_POST['uf'];
$sql = "UPDATE cliente SET cli_nome='$nome', 
            cli_cpf_cnpj='$cpfcnpj', 
            cli_email='$email',
            cli_celular='$celular',
            cli_cidade='$cidade', 
            cli_endereco='$endereco',
            cli_bairro='$bairro', 
            cli_obs='$observacao',
            cli_uf='$uf' 
            WHERE cli_cod='$id'";

if (mysqli_query($connect, $sql)) {
    echo "Atualizado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Não foi possivel atualizar, Tente novamente!";
}
