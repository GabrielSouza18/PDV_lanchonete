<!-- INCLUSAO ESTOQUE NO BANCO -->
<?php
include 'db_connect.php';
$codProd = $_POST['codProduto'];
$valorUnitario = $_POST['valor'];
$quantidade = $_POST['quantidade'];


$sql = "INSERT INTO estoque (est_valor_unitario,est_qtd,est_pro_cod) 
                VALUES ('$valorUnitario','$quantidade','$codProd')";
if (mysqli_query($connect, $sql)) {
    echo "Cadastrado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Erro ao cadastrar";
}

?>