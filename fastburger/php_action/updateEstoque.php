<!-- Atualização de Estoque -->
<?php
require_once 'db_connect.php';
$id = $_POST['codigo'];
$codProduto = $_POST['codProduto'];
$valor = $_POST['valor'];
$quantidade = $_POST['quantidade'];
$sql = "UPDATE estoque SET est_pro_cod='$codProduto', 
            est_valor_unitario='$valor', 
            est_qtd='$quantidade'
            WHERE  est_cod='$id'";

if (mysqli_query($connect, $sql)) {
    echo "Atualizado com sucesso!";
    header('Location:../index.html');
} else {
    echo "Não foi possivel atualizar, Tente novamente!";
}
