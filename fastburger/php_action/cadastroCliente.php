<!-- INCLUSAO CLIENTE NO BANCO -->
<?php
include 'db_connect.php';
$nome = $_POST['nome'];
$cpfcnpj = $_POST['cpfcnpj'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$observacao = $_POST['observacao'];
$uf = $_POST['uf'];
$sql = "INSERT INTO cliente (cli_nome, cli_cpf_cnpj, cli_email ,cli_celular, cli_cidade, cli_endereco, cli_bairro, cli_obs, cli_uf) 
                VALUES ('$nome','$cpfcnpj','$email','$celular','$cidade','$endereco','$bairro','$observacao','$uf')";
if (mysqli_query($connect, $sql)) {
    echo "Cadastrado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Erro ao cadastrar";
}

?>