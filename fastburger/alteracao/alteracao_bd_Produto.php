<!-- Chamando a Tabela Produto no banco Para alteração -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM produto";
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

  <title>Alteração BD Fornecedor - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE ALTERAÇÃO PRODUTO -->
  <div class="container">
    <div class="card">
      <section>
        <form action="../php_action/updateProduto.php" method="POST" enctype="multipart/form-data">
          <h2>Alterar Produto</h2>
          <center>
            <img src="../assets/img/produtos.png" width="100px"/>
          </center>

          <?php
              require_once '../php_action/db_connect.php';
              $id = $_GET['id'];

              $sql = ("SELECT * FROM produto WHERE pro_cod LIKE \"%$id%\" group by 1");

              $resultado = mysqli_query($connect, $sql);
             while($dados = mysqli_fetch_array($resultado)){

              $codigo  = $dados['pro_cod'];
              $codigoFornecedor = $dados['pro_for_cod'];
              $nome = $dados['pro_nome'];
              $uMedida = $dados['pro_umedida'];

             }
              ?>

          <div class="card-content">
            <div class="linha">
              <div class="card-content-area">
                <label for="codigo">Codigo:</label>
                <input type="text" name="codigo" value="<?php echo $codigo ?>" readonly />
              </div>
              <div class="card-content-area">
                <label for="codForPro">Cod Fornecedor:</label>
                <input type="text" name="codForPro" value="<?php echo $codigoFornecedor ?>" onkeypress="return somenteNumeros()">
              </div>
              <div class="card-content-area">
                <label for="produto">Produto</label>
                <input type="text" name="nomeProd" value="<?php echo $nome ?>" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="unidadeMedida">Unidade Medida</label>
                <input type="text" name="unidadeMedida" value="<?php echo $uMedida ?>" onkeypress="return somenteLetras()" />
              </div>
              <br />
              <div class="card-content">
                <div class="card-content-area">
                  <label for="foto">Foto do Produto:</label>
                  <input type="file" name="foto" >
                </div>
              </div>
              <button type="submit">Atualizar</button>
        </form>
      </section>
      <a href="../alteracao/alteracaoProduto.php"><button>Sair</button></a>
    </div>
  </div>
</body>
</html>