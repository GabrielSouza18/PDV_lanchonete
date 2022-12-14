<!-- Chamando a Tabela Cliente no banco -->
<?php
require_once '../php_action/db_connect.php';
$sql = "SELECT * FROM cliente";
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

  <title>Consulta Cliente- FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Consulta DE CLIENTE -->

      <div class="container">
        <div class="card">
        <section>
    <form action="consultaCliente.php" method="GET">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/clientes.png" width="100px" />
          </center>
          <div class="card-content">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">NOME</th>
                  <th scope="col">COD Cliente</th>
                  <th scope="col">CPF/CNPJ</th>
                  <th scope="col">ENDEREÇO</th>
                  <th scope="col">BAIRRO</th>
                  <th scope="col">CIDADE</th>
                  <th scope="col">UF</th>
                  <th scope="col">CELULAR</th>
                  <th scope="col">EMAIL</th>
                  <th scope="col">OBS</th>
                </tr>
                <tr>
                  <?php
                  require_once '../php_action/db_connect.php';

                  $id =($_GET['id']);
    
                  $resultado2 = mysqli_query($connect, "SELECT cli_cod, cli_nome, cli_cpf_cnpj, cli_endereco, cli_bairro, cli_cidade, cli_uf, cli_celular, cli_email, cli_obs FROM cliente WHERE cli_cod = $id ") or die("Erro");

                  while ($saida = mysqli_fetch_array($resultado2)){
                    $nome = $saida['cli_nome'];
                    $codigo = $saida['cli_cod'];                 
                    $cpfcnpj = $saida['cli_cpf_cnpj'];
                    $endereco = $saida['cli_endereco'];
                    $bairro = $saida['cli_bairro'];
                    $cidade = $saida['cli_cidade'];
                    $uf = $saida['cli_uf'];
                    $telefone = $saida['cli_celular'];
                    $email = $saida['cli_email'];
                    $obs = $saida['cli_obs'];
                  

                    echo ("<td>".$nome);
                    echo ("</td>");
                    echo ("<td>".$codigo);
                    echo ("</td>");
                    echo ("<td>".$cpfcnpj);
                    echo ("</td>");
                    echo ("<td>".$endereco);
                    echo ("</td>");
                    echo ("<td>".$bairro);
                    echo ("</td>");
                    echo ("<td>".$cidade);
                    echo ("</td>");
                    echo ("<td>".$uf);
                    echo ("</td>");
                    echo ("<td>".$telefone);
                    echo ("</td>");
                    echo ("<td>".$email);
                    echo ("</td>");
                    echo ("<td>".$obs);
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
            <a href="consultaCliente.php">
              <button type="submit">Voltar</button></a>

          </div>
        </div>
    
</body>

</html>