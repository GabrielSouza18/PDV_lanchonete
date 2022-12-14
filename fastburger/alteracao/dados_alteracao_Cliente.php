<!-- Chamando a Tabela Cliente no banco -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM cliente";
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


  <title>Alterar Cliente - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Alteração DE CLIENTE -->
  <section>
    <form action="alteracao_bd_Cliente.php" method="POST">
      <div class="container">
        <div class="card">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/clientes.png" width="100px" />
          </center>
          <div class="card-content">

            <table class="table">
              <thead>
                <tr>
                  <th>COD cliente</th>
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

              $nome = $_POST['nomeCliente'];
              $sql = ("SELECT cli_cod, cli_nome, cli_cpf_cnpj, cli_endereco, cli_bairro, cli_cidade, cli_uf, cli_celular, cli_email, cli_obs FROM cliente WHERE cli_nome LIKE \"%$nome%\" group by 1");
              $resultado = mysqli_query($connect, $sql);

              while($dados = mysqli_fetch_array($resultado)){


              $nome = $dados['cli_nome'];
              $codigo = $dados['cli_cod'];
              $cpfcnpj = $dados['cli_cpf_cnpj'];
              $endereco = $dados['cli_endereco'];
              $bairro = $dados['cli_bairro'];
              $cidade = $dados['cli_cidade'];
              $uf = $dados['cli_uf'];
              $telefone = $dados['cli_celular'];
              $email = $dados['cli_email'];
              $obs = $dados['cli_obs'];
              ?>
              <tbody>
                <tr>
                  <td><?php echo $nome . "<br>"; ?></td>
                  <td><?php echo $codigo . "<br>"; ?></td>
                  <td><?php echo $cpfcnpj . "<br>"; ?></td>
                  <td><?php echo $endereco . "<br>"; ?></td>
                  <td><?php echo $bairro . "<br>"; ?></td>
                  <td><?php echo $cidade . "<br>"; ?></td>
                  <td><?php echo $uf. "<br>"; ?></td>
                  <td><?php echo $telefone . "<br>"; ?></td>
                  <td><?php echo $email. "<br>"; ?></td>
                  <td><?php echo $obs . "<br>"; ?></td>&nbsp;

                  <td><a href="alteracao_bd_Cliente.php?id=<?php echo $codigo ?>"> Editar</a></td>
                </tr>
              </tbody>
              <?php 
                }
              ?>
            </table>
    </form>
    <a href="../consulta/consultaCliente.php">
      <button type="submit">Voltar</button></a>
  </section>


  </div>
  </div>
  </div>
  </form>
  </section>
</body>

</html>