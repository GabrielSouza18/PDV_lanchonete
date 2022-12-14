<!-- INCLUSAO FORNECEDOR NO BANCO -->
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
$sql = "INSERT INTO fornecedor (for_nome, for_cpf_cnpj, for_email ,for_celular, for_cidade, for_endereco, for_bairro, for_obs, for_uf) 
            VALUES ('$nome','$cpfcnpj','$email','$celular','$cidade','$endereco','$bairro','$observacao','$uf')";

if (mysqli_query($connect, $sql)) {
    echo "Cadastrado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Erro ao cadastrar";
}

?>