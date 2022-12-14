<!-- Chamando a Tabela Produto no banco -->
<?php
require_once '../php_action/db_connect.php';
$sql = "SELECT * FROM produto";
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

    th,
    td {
      padding-left: 20px;
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


  <title>Alterar Produto - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Alteração DE Produto -->
  <div class="container">
    <div class="card">
      <section>
        <form action="alteracao_bd_Produto.php" method="POST" enctype="multipart/form-data">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/produtos.png" width="100px" />
          </center>
          <div class="card-content">
            <table class="table">
              <thead>
                <tr>
                  <th>COD. Produto</th>
                  <th>COD. Fornecedor</th>
                  <th>Nome </th>
                  <th>Unidade de Medida </th>
                  <th>Foto</th>
                </tr>
              </thead>
              <?php
              require_once '../php_action/db_connect.php';
              $nomeProduto = $_POST['nomeProduto'];

              $sql = ("SELECT * FROM produto WHERE pro_nome LIKE \"%$nomeProduto%\" group by 1");

              $resultado = mysqli_query($connect, $sql);
             while($dados = mysqli_fetch_array($resultado)){

              $codigo  = $dados['pro_cod'];
              $codigoFornecedor = $dados['pro_for_cod'];
              $nome = $dados['pro_nome'];
              $uMedida = $dados['pro_umedida'];

              ?>
              <tbody>
                <tr>
                  <td><?php echo $codigo . "<br>" ?></td>
                  <td><?php echo $codigoFornecedor . "<br>"; ?></td>
                  <td><?php echo $nome. "<br>"; ?></td>
                  <td><?php echo $uMedida . "<br>";?></td>
                  <td><?php echo "<img src='../consulta/conversaoImg.php?PicNum=$codigo' width='130px' height='80px' >";?><br></td>&nbsp;
                  <td><a href="alteracao_bd_Produto.php?id=<?php echo $codigo ?>"> Editar</a></td>
                </tr>
              </tbody>
              <?php 
             }
              ?>
            </table>
        </form>
      </section>
      <a href="../alteracao/alteracaoProduto.php">
        <button type="submit">Voltar</button></a>
    </div>
  </div>
  </div>
</body>

</html>