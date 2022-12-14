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

    <title>Exclusão Estoque - FastBurger</title>
  </head>

  <body>
    <!-- SEÇÃO DE Exclusão DE Estoque -->
    <section>
      <form action="/php_action/excluirEstoque.php" method="POST">
        <div class="container">
          <div class="card">
            <h2>Exclusão Estoque</h2>
            <center>
              <img src="../assets/img/estoque.png" width="100px" />
            </center>
            <div class="card-content">

              <div class="card-content-area">
                <table class="table">
                  <thead>
                    <tr>
                      <th>COD Estoque</th>
                      <th>Nome </th>
                      <th>Valor Unitario </th>
                      <th>Quantidade </th>
                    </tr>
                  </thead>
                  <?php
                  require_once '../php_action/db_connect.php';
                  $codProduto = $_POST['codProduto'];
                  $resultado = mysqli_query($connect, "SELECT est_cod,est_pro_cod , est_valor_unitario, est_qtd FROM estoque WHERE est_pro_cod LIKE \"%$codProduto%\" ");
                  $saida = mysqli_fetch_array($resultado);
                  $codigo = $saida['est_cod'];
                  $codProduto = $saida['est_pro_cod'];
                  $valorUnitario= $saida['est_valor_unitario'];
                  $quantidade= $saida['est_qtd'];
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $saida['est_cod'] . "<br>" ?></td>&nbsp;
                      <td><?php echo $saida['est_pro_cod'] . "<br>" ?></td>&nbsp;
                      <td><?php echo $saida['est_valor_unitario'] . "<br>" ?></td>&nbsp;
                      <td><?php echo $saida['est_qtd'] . "<br>" ?></td>&nbsp;
                      <td><a href="../php_action/excluirEstoque.php?id=<?php echo $codigo ?>">Deletar</a></td>
                    </tr>
                  </tbody>
                  </tbody>
                </table>
              </div>
              <button type="submit">Voltar</button>

            </div>
          </div>
      </form>
    </section>
  </body>

  </html>