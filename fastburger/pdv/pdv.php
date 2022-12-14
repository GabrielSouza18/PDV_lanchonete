<!-- Chamando a Tabela Produto no banco -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM produto";

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
  <style>
    #logo {
      margin-top: 10vh;
    }

    body {
      background-color: #181a1b;
    }

    nav {
      margin: 2rem;
    }


    table {
      border-top-left-radius: 1.25rem;
      border-top-right-radius: 1.25rem;
      border-bottom-right-radius: 1.25rem;
      border-bottom-left-radius: 1.25rem;
      overflow: hidden;
      width: auto;
      height: auto;

    }

    #margin-td {

      padding: 0;
      width: 150px;
    }
  </style>
  <title>Consulta Produto - FastBurger</title>
</head>

<body>
  <nav>
    <div class="container my-auto text-center">
      <img src="../assets/img/fastburgerlogo.png" alt="logofastburger" id="logo" width="300px" /><br />
    </div>
  </nav>
  <section class="container my-auto text-center">


    <table class="table table-dark table-borderless ">

      <thead>
        <tr>
          <th scope="col">Produto</th>
          <th scope="col">Nome</th>
          <th scope="col">Valor</th>
          <th scope="col">Qtd.Estoque</th>
          <th scope="col">Medida</th>
          <th scope="col">&nbsp;</th>
          <th scope="col">&nbsp;</th>

          <!-- <td><button type="submit" class="btn btn-danger">Adicionar</button></td>  -->
        </tr>
        <?php
        include '../php_action/db_connect.php';



        $sql = ("SELECT * FROM produto p, estoque e WHERE p.pro_cod = e.est_pro_cod");
        $resultado = mysqli_query($connect, $sql);

        while ($dados = mysqli_fetch_array($resultado)) {

          $codigo = $dados['pro_cod'];
          $quantidade = $dados['est_qtd'];
          $nome = $dados['pro_nome'];
          $medida = $dados['pro_umedida'];
          $valor = $dados['est_valor_unitario'];

        ?>
          <tr>
            <td style="max-width: 130px;max-height: 80px; ">
              <?php echo "<img src='conversaoImg.php?PicNum=$codigo' width='30%' height='30%' ;>"; ?>
            </td>
            <td>
              <?php echo $nome; ?>
            </td>
            <td>
              <?php echo "R$" . $valor; ?>
            </td>
            <td>
              <?php echo $quantidade; ?>
            </td>
            <td>
              <?php echo $medida; ?>
            </td>
            <td id="margin-td">
              <!-- Quantidade -->

              <div class="d-flex mb-4" style="max-width: 150px;height: 40px;">
                <button class="btn btn-danger px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-
                  <i class="fas fa-minus"></i>
                </button>

                <div class="form-outline">
                  <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />

                </div>

                <button class="btn btn-danger px-3 ms-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+
                  <i class="fas fa-plus"></i>
                </button>
            </td>

            <td> <button type="submit" class="btn btn-danger px-3 me-2" href="carrinho.php?acao=add&id=<?php echo $codigo ?>">Adicionar </button></td>
          </tr>

        <?php
        }
        ?>

      </thead>

    </table>




  </section>


  <!-- Resumo do Pedido -->
  <center></center>

  </center>

  <script src="assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>