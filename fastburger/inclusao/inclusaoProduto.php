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

  <title>Inclusão Produto - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE CADASTRO DE PRODUTO -->
  <section>
    <form action="../php_action/cadastroProduto.php" method="POST" enctype="multipart/form-data">
      <div class="container">
        <div class="card">
          <h2>Cadastrar Produto</h2>
          <center>
            <img src="../assets/img/produtos.png" width="100px" />
          </center>

          <div class="card-content">
            <div class="card-content-area">
              <label for="codFornecedor">COD. Fornecedor:</label>
              <input type="text" placeholder="Digite o COD. Fornecedor" name="codFornecedor" onkeypress="return somenteNumeros()" />
            </div>

            <div class="card-content">
              <div class="card-content-area">
                <label for="nome">Produto:</label>
                <input type="text" placeholder="Nome do produto" name="nome" />
              </div>

              <div class="card-content">
                <div class="card-content-area">
                  <label for="unidadeMedida">Unidade de Medida:</label>
                  <input type="text" placeholder="Digite a Un. medida do produto" name="unidadeMedida" onkeypress="return somenteLetras()" />
                </div>

                <div class="card-content">
                  <div class="card-content-area">
                    <label for="foto">Foto do Produto:</label>

                    <input type="file" name="foto">
                  </div>



                </div>

                <button type="submit">Incluir</button>
              </div>
            </div>
    </form>

  </section>

</body>

</html>