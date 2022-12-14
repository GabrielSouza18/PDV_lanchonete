<!-- Chamando a Tabela Fornecedor no banco -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM fornecedor";
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


  <title>Alterar Fornecedor - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Alteração DE Fornecedor -->
  <section>
    <form action="alteracao_bd_Fornecedor.php" method="POST">
      <div class="container">
        <div class="card">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/fornecedores.png" width="100px" />
          </center>
          <div class="card-content">

            <table class="table">
              <thead>
                <tr>
                  <th>COD Fornecedor</th>
                  <th>Nome </th>
                  <th>CPF/CNPJ </th>
                  <th>Endereco </th>
                  <th>Bairro </th>
                  <th>Cidade </th>
                  <th>UF </th>
                  <th>Email </th>
                  <th>OBS</th>
                  <th>Celular</th>

                </tr>
              </thead>

              <?php
              require_once '../php_action/db_connect.php';

              $nome = $_POST['nomeFornecedor'];
              $sql = ("SELECT for_cod, for_nome, for_cpf_cnpj, for_endereco, for_bairro, for_cidade, for_uf, for_celular, for_email, for_obs FROM fornecedor WHERE for_nome LIKE \"%$nome%\" group by 1");
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)){

              $nome = $dados['for_nome'];
              $codigo = $dados['for_cod'];
              $cpfcnpj = $dados['for_cpf_cnpj'];
              $endereco = $dados['for_endereco'];
              $bairro = $dados['for_bairro'];
              $cidade = $dados['for_cidade'];
              $uf = $dados['for_uf'];
              $telefone = $dados['for_celular'];
              $email = $dados['for_email'];
              $obs = $dados['for_obs'];
              ?>
              <tbody>
                <tr>
                  <td><?php echo $nome . "<br>"; ?></td>
                  <td><?php echo $codigo . "<br>"; ?></td>
                  <td><?php echo $cpfcnpj . "<br>"; ?></td>
                  <td><?php echo $endereco . "<br>"; ?></td>
                  <td><?php echo $bairro . "<br>"; ?></td>
                  <td><?php echo $cidade . "<br>"; ?></td>
                  <td><?php echo $uf . "<br>"; ?></td>
                  <td><?php echo $telefone . "<br>"; ?></td>
                  <td><?php echo $email . "<br>"; ?></td>
                  <td><?php echo $obs . "<br>"; ?></td>&nbsp;

                  <td><a href="alteracao_bd_fornecedor.php?id=<?php echo $codigo ?>"> Editar</a></td>
                </tr>
              </tbody>
              <?php 
                }
              ?>
            </table>
    </form>
    <a href="../consulta/consultaFornecedor.php">
      <button type="submit">Voltar</button></a>
  </section>


  </div>
  </div>
  </div>
  </form>
  </section>
</body>

</html>