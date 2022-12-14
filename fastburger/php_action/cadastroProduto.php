<!-- INCLUSAO PRODUTO NO BANCO -->
<?php
include  'db_connect.php';

$nome = $_POST['nome'];
$fornecedorCod = $_POST['codFornecedor'];
$foto = $_FILES['foto'];
$unidadeMedida = $_POST['unidadeMedida'];



$nomeFinal = time() . '.jpg';
if (move_uploaded_file($foto['tmp_name'], $nomeFinal)) {
    $tamanhoImg = filesize($nomeFinal);
    $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

    $sql = "INSERT INTO produto (pro_foto, pro_nome, pro_umedida, pro_for_cod) 
                VALUES ('$mysqlImg','$nome','$unidadeMedida', '$fornecedorCod')";


    mysqli_query($connect, $sql);
    header('Location:../index.html');
    unlink($nomeFinal);
}
?>