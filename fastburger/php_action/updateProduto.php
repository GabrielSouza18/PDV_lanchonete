<!-- Atualização de Produto -->
<?php
include  'db_connect.php';
$id = $_POST['codigo'];
$nome = $_POST['nomeProd'];
$fornecedorCod = $_POST['codForPro'];
$foto = $_FILES['foto'];
$unidadeMedida = $_POST['unidadeMedida'];
$nomeFinal = time() . '.jpg';
if (move_uploaded_file($foto['tmp_name'], $nomeFinal)) {
    $tamanhoImg = filesize($nomeFinal);
    $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

    $sql = "UPDATE produto SET pro_for_cod='$codForPro',pro_foto='$mysqlImg',pro_nome='$nome',pro_umedida='$unidadeMedida'  WHERE pro_cod='$id'";


    mysqli_query($connect, $sql);
    header('Location:../index.html');
    unlink($nomeFinal);
}
?>