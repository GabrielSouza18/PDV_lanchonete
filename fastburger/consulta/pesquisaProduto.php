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
  <link rel="preconnect" href="https:fonts.googleapis.com" />
  <link rel="preconnect" href="https:fonts.gstatic.com" crossorigin />
  <link href="https:fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
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
      width: 45rem;


      margin-top: 10vh;
      background-color: #ffffff;
      text-align: center;
      border-radius: 5px;
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;


    }

    a {
      text-decoration: none;
      color: black;
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
  <title>Consulta produto- FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Consulta DE Produto -->
  <div class="container">
    <div class="card">
      <section>
        <form action="pesquisaCompletaProduto.php" method="POST" enctype="multipart/form-data">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/produtos.png" width="100px" />
          </center>
          <div class="card-content">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">COD produto</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Uni Medida</th>
                  <th scope="col">Foto</th>
                </tr>
                <?php
                require_once '../php_action/db_connect.php';
                $nome = $_POST['nomeProduto'];
                $sql = ("SELECT pro_cod, pro_nome, pro_umedida, pro_foto FROM produto WHERE pro_nome LIKE \"%$nome%\" group by 1");
                $resultado = mysqli_query($connect, $sql);

                while ($dados = mysqli_fetch_array($resultado)) {
                  $nome = $dados['pro_nome'];
                  $codigo = $dados['pro_cod'];
                  $medida = $dados['pro_umedida'];


                ?>
                  <tr>
                    <th>
                      <a href="pesquisaCompletaProduto.php?id=<?php echo $codigo; ?>"><?php echo $codigo; ?></a><br><br>
                    </th>
                    <th>
                      <?php echo $nome; ?><br><br>
                    </th>
                    <th>
                      <?php echo $medida; ?><br><br>
                    </th>
                    <th style="max-width: 130px;max-height: 80px; ">
                      <?php echo "<img src='conversaoImg.php?PicNum=$codigo' width='130px' height='80px' ;>";
                      echo ("</td>"); ?><br><br>
                    </th>

                  </tr>
                <?php
                }
                ?>

              </thead>
            </table>
        </form>
      </section>
      <a href="consultaProduto.php">
        <button type="submit">Voltar</button></a>
    </div>
  </div>
</body>

</html>