<!-- Chamando a Tabela Fornecedor no banco -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM fornecedor";
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

  <title>Consulta fornecedor - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE Consulta DE fornecedor -->
  
      <div class="container">
        <div class="card">
        <section>
    <form action="consultaFornecedor.php" method="GET">
          <h2>Dados</h2>
          <center>
            <img src="../assets/img/fornecedores.png" width="100px" />
          </center>
          <div class="card-content">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">NOME</th>
                  <th scope="col">COD for</th>
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
    
                  $resultado2 = mysqli_query($connect, "SELECT for_cod, for_nome, for_cpf_cnpj, for_endereco, for_bairro, for_cidade, for_uf, for_celular, for_email, for_obs FROM fornecedor WHERE for_cod = $id ") or die("Erro");

                  while ($saida = mysqli_fetch_array($resultado2)){
                    $nome = $saida['for_nome'];
                    $codigo = $saida['for_cod'];                 
                    $cpfcnpj = $saida['for_cpf_cnpj'];
                    $endereco = $saida['for_endereco'];
                    $bairro = $saida['for_bairro'];
                    $cidade = $saida['for_cidade'];
                    $uf = $saida['for_uf'];
                    $telefone = $saida['for_celular'];
                    $email = $saida['for_email'];
                    $obs = $saida['for_obs'];
                  

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
            <a href="consultaFornecedor.php">
              <button type="submit">Voltar</button></a>

          </div>
        </div>
    
</body>

</html>