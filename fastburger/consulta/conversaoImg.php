<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "lanchonete";


$PicNum = $_GET["PicNum"];

$connect = mysqli_connect($host, $username, $password, $db) or die("Impossível aConectar");

$result = mysqli_query($connect, "SELECT * FROM produto WHERE pro_cod=$PicNum") or die("Impossível executar a query ");

$row = mysqli_fetch_object($result);
Header("Content-type: image/gif");
echo $row->pro_foto;
