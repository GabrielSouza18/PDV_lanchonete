<?php
// require_once '../php_action/db_connect.php';
// $sql = "SELECT * FROM produto";
?>
<-------------------------------------------------------------------->
<?php 
	// session_start();
	

	// $Connection = require_once '../php_action/db_connect.php';
  // require_once "cartFunction.php";
  // $id = ($_GET['id']);

	// if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
	// 	if($_GET['acao'] == 'add' && isset($_GET[$id]) && preg_match("/^[0-9]+$/", $_GET[$id])){ 
	// 		addCart($_GET[$id], 1);			
	// 	}

	// 	if($_GET['acao'] == 'del' && isset($_GET[$id]) && preg_match("/^[0-9]+$/", $_GET[$id])){ 
	// 		deleteCart($_GET[$id]);
	// 	}

	// 	if($_GET['acao'] == 'up'){ 
	// 		if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
	// 			foreach($_POST['prod'] as $id => $qtd){
	// 					updateCart($id, $qtd);
	// 			}
	// 		}
	// 	} 
	// 	header('location: carrinho.php');
	// }

	// $resultsCarts = getContentCart($Connection);
	// $totalCarts  = getTotalCart($Connection);


?>
<----------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Fastburger - PDV</title>

  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
</head>
<style>
  body {
    background-color: #181a1b;
  }

  #logo {
    margin-top: 25vh;
    margin-bottom: 1rem;
  }
</style>

<body>
  <!-- MENU DE OPÇÕES -->



  <nav>
    <div class="container my-auto text-center">
      <img src="../assets/img/fastburgerlogo.png" alt="logofastburger" id="logo" width="300px" /><br />


    </div>
  </nav>
  <header class="container my-auto text-center">
    <center>
    <section >
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Resumo do Pedido</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Produtos

                <span>Valor aqui</span>
              </li>

              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total</strong>
                </div>
                <span><strong>Valor Aqui</strong></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Forma de pagamento</strong>
                </div>
                <span><strong>Forma</strong></span>
              </li>
            </ul>

            <button type="button" class="btn btn-danger btn-lg btn-block">
              Fechar pedido
            </button><br><br>
            <p><strong>Formas de Pagamento</strong></p>
            <img class="me-2" width="45px" src="../assets/img/cartao.png" />&nbsp;&nbsp;&nbsp;
            <img class="me-2" width="45px" src="../assets/img/dinheiro.png" />
            <img class="me-2" width="45px" src="../assets/img/pix.png" />
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
 
  </header>






  <script src="assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>