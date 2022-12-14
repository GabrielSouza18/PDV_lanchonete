<!-- Atualização de Fornecedor -->
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
$sql = "UPDATE fornecedor SET for_nome='$nome', 
            for_cpf_cnpj='$cpfcnpj', 
            for_email='$email',
            for_celular='$celular',
            for_cidade='$cidade', 
            for_endereco='$endereco',
            for_bairro='$bairro', 
            for_obs='$observacao'
            cli_uf='$uf'  
            WHERE for_cod='$id'";

if (mysqli_query($connect, $sql)) {
    echo "Atualizado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Não foi possivel atualizar, Tente novamente!";
}
