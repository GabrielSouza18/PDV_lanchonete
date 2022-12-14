<!-- Chamando a Tabela Estoque no banco -->
<?php
require_once '../php_action/db_connect.php';
$sql = "SELECT * FROM estoque";
$resultado = mysqli_query($connect, $sql);
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
      width: 40rem;


      margin-top: 10vh;
      background-color: #ffffff;
      text-align: center;
      border-radius: 5px;
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;


    }



    input {
      width: 95%;
      border-top: none;
      border-left: none;
      border-right: none;
      box-shadow: 0 0 0 0;
      outline: 0;
      padding: 10px;
    }

    button {
      margin-top: 1rem;
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

  <title>Inclusão Estoque - FastBurger</title>
</head>

<body>
  <section>
    <!-- SEÇÃO DE CADASTRO DE ESTOQUE-->
    <form action="../php_action/cadastroEstoque.php" method="POST">
      <div class="container">
        <div class="card">
          <h2>Cadastrar Estoque</h2>
          <center>
            <img src="../assets/img/estoque.png" width="100px" />
          </center>
          <div class="card-content">
            <div class="card-content-area">
              <?php
              include '../php_action/db_connect.php';
              $query="SELECT pro_cod,pro_nome FROM produto ORDER BY pro_cod,pro_nome ASC";
              $query=mysqli_query($connect, $query);
              ?>
              <label for="texto">Produto</label><br>
              <select name="codProduto" style="width: 100px; height: 25px;">
              <option>--Selecione--</option>

                <?php

                while ($dados = mysqli_fetch_array($query)) {

                ?>


                  <option value="<?php echo $dados['pro_cod']; ?>">
                    <?php echo $dados['pro_nome']; ?>
                  </option>

                <?php
                }
                echo $dados['pro_cod'];
                ?>

              </select><br><br>
            </div>
          </div>
            

            <div class="card-content">

              <div class="card-content-area">
                <label for="valor">Valor Unitario:</label>
                <input type="text" placeholder="Valor R$:" name="valor" onkeypress="return somenteNumeros()" />

              </div>
              <div class="card-content">

                <div class="card-content-area">
                  <label for="quantidade">Quantidade:</label>
                  <input type="text" placeholder="Digite a quantidade" name="quantidade" onkeypress="return somenteNumeros()" />
                </div>
                <br />
                <br />
                <button type="submit">Incluir</button>
              </div>
            </div>
          </div>
    </form>
  </section>
</body>

</html>