<!-- Chamando a Tabela Estoque no banco -->
<?php
require_once '../php_action/db_connect.php';
$sql = "SELECT * FROM estoque";
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
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

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

  <title>Consulta Estoque - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Consulta DE Estoque -->
  
      <div class="container">
        <div class="card">
        <section>
    <form action="consultaEstoque.php" method="GET">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/estoque.png" width="100px" />
          </center>
          <div class="card-content">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Código</th>
                  <th scope="col">Código Produto</th>
                  <th scope="col">Valor Unitário</th>
                  <th scope="col">Quantidade</th>
                </tr>
                <tr>
                  <?php
                  require_once '../php_action/db_connect.php';

                  $id =($_GET['id']);
    
                  $resultado2 = mysqli_query($connect, "SELECT est_cod, est_pro_cod, est_valor_unitario, est_qtd FROM estoque WHERE est_cod = $id ") or die("Erro");

                  while ($saida = mysqli_fetch_array($resultado2)){
                    $codigoProd = $saida['est_pro_cod'];
                    $codigo = $saida['est_cod'];                 
                    $valorUni = $saida['est_valor_unitario'];
                    $quantidade = $saida['est_qtd'];
                  

                    echo ("<td>".$codigo);
                    echo ("</td>");
                    echo ("<td>".$codigoProd);
                    echo ("</td>");
                    echo ("<td>".$valorUni);
                    echo ("</td>");
                    echo ("<td>".$quantidade);
                    echo ("</td>");
                  }  
                  ?>
                </tr>

              </thead>
              <tbody>

              </tbody>
            </table>
            </form>
  </section>
            <a href="consultaEstoque.php">
              <button type="submit">Voltar</button></a>

          </div>
        </div>
    
</body>

</html>