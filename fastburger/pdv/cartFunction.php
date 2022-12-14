<?php


// function getProductsByIds($id){
// 	require_once '../php_action/db_connect.php';

// 	$id = ($_GET['id']);

	
//     $sql = ("SELECT * FROM produto p, estoque e WHERE p.pro_cod and e.est_pro_cod = $id");
//     $resultado = mysqli_query($connect, $sql);

//     while ($dados = mysqli_fetch_array($resultado)) {

//       $codigo = $dados['pro_cod'];
//       $quantidade = $dados['est_qtd'];
//       $nome = $dados['pro_nome'];
//       $medida = $dados['pro_umedida'];
//       $valor = $dados['est_valor_unitario'];
// 	}
// }

// if (!isset($_SESSION['carrinho'])) {
// 	$_SESSION['carrinho'] = array();
// }

// function addCart($id, $quantidade)
// {
// 	if (!isset($_SESSION['carrinho'][$id])) {
// 		$_SESSION['carrinho'][$id] = $quantidade;
// 	}
// }

// function deleteCart($id)
// {
// 	if (isset($_SESSION['carrinho'][$id])) {
// 		unset($_SESSION['carrinho'][$id]);
// 	}
// }

// function updateCart($id, $quantidade)
// {
// 	if (isset($_SESSION['carrinho'][$id])) {
// 		if ($quantidade > 0) {
// 			$_SESSION['carrinho'][$id] = $quantidade;
// 		} else {
// 			deleteCart($id);
// 		}
// 	}
// }

// function getContentCart($id){
// 	$resultado = array();

// 	if ($_SESSION['carrinho']) {

// 		$cart = $_SESSION['carrinho'];
// 		$products =  getProductsByIds($id, implode(',', array_keys($cart)));

//         while ($dados = mysqli_fetch_array($products)) {

//             $codigo = $dados['pro_cod'];
//             $quantidade = $dados['est_qtd'];
//             $nome = $dados['pro_nome'];
//             $medida = $dados['pro_umedida'];
//             $valor = $dados['est_valor_unitario'];
//           }
//         }
//     }
// 	return $results;


// function getTotalCart($id)
// {

// 	$total = 0;

// 	foreach (getContentCart($id) as $product) {
// 		$total += $product['subtotal'];
// 	}
// 	return $total;
// }
