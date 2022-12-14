<!-- Chamando a Tabela Estoque no banco Para alteração -->
<?php
require_once '../php_action/db_connect.php';
$sql = "SELECT * FROM estoque";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
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
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
  <script src="../assets/js/script.js"></script>

  <style>
    body {
      background-color: #181a1b;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      width: auto;



      margin-top: 10vh;
      background-color: #ffffff;
      text-align: center;
      border-radius: 5px;
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;


    }

    .linha,
    .linha2,
    .linha3 {

      margin-left: 15px;
      float: left;
    }


    input {
      width: 95%;
      border-top: none;
      border-left: none;
      border-right: none;
      box-shadow: 0 0 0 0;
      outline: 0
    }

    button {
      margin-top: 3rem;
      font-family: 'Poppins', sans-serif;
      border-radius: 5px;
      width: 7rem;
      height: 2rem;
      background-color: white;
      transition: background 0.3s;
    }

    button:hover {
      color: white;
      background: #181a1b;


    }
  </style>

  <title>Alteração BD Estoque - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE ALTERAÇÃO Estoque -->
  <div class="container">
    <div class="card">
      <section>
        <form action="../php_action/updateEstoque.php" method="POST">
          <h2>Alterar Estoque</h2>
          <center>
            <img src="../assets/img/estoque.png" width="100px" />
          </center>
          <div class="card-content">
            <div class="linha">

            <?php
              require_once '../php_action/db_connect.php';

              $id = $_GET['id'];

              $sql = ("SELECT * FROM estoque WHERE est_cod LIKE \"%$id%\" group by 1");
              $resultado = mysqli_query($connect, $sql);

              while ($dados = mysqli_fetch_array($resultado)) {

                $codEstoque = $dados['est_cod'];
                $codProduto = $dados['est_pro_cod'];
                $valorUnitario = $dados['est_valor_unitario'];
                $quantidade = $dados['est_qtd'];

              }
            ?>
              <div class="card-content-area">
                <label for="codigo">Codigo Estoque:</label>
                <input type="text" name="codigo" value="<?php echo $codEstoque ?>" readonly />
              </div>

              <div class="card-content-area">
                <label for="nome">Codigo Produto</label>
                <input type="text" name="codProduto" value="<?php echo $codProduto ?>" onkeypress="return somenteNumeros()" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="valor">Valor R$</label>
                <input type="text" name="valor" onkeypress="return somenteNumeros()" value=<?php echo $valorUnitario ?> " onkeypress=" return somenteNumeros()" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" value="<?php echo $quantidade ?>" onkeypress="return somenteNumeros()" />
              </div>
            </div>
          </div>
          <button type="submit">Atualizar</button>
        </form>
      </section>
      <a href="dados_alteracao_Estoque.php">
        <button type="submit">Voltar</button></a>
    </div>
  </div>
</body>
</html>