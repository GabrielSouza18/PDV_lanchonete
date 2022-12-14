<!-- Chamando a Tabela usuario no banco -->

<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM usuario";
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
  <script src="../assets/js/jquery-3.2.1.min.js"></script>
  <script src="../assets/js/jquery.mask.min.js"></script>
  <script src="../assets/js/mascaras.js"></script>

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
      width: 20rem;


      margin-top: 10vh;
      background-color: #ffffff;
      text-align: center;
      border-radius: 5px;
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;


    }



    input {
      width: 80%;
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

  <title>Inclusão Usuario - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE CADASTRO DE USUARIO -->
  <section>
    <form action="../php_action/cadastroUsuario.php" method="POST">
      <div class="container">
        <div class="card">
          <h2>Cadastrar Usuario</h2>
          <center>
            <img src="../assets/img/usuario.png" width="100px" />
          </center>
          <div class="card-content">

            <div class="card-content-area">
              <label for="nome">Nome:</label>
              <input type="text" placeholder="Digite o Nome" name="nome" onkeypress="return somenteLetras()"/>
            </div>
            <br>
            <div class="card-content">

              <div class="card-content-area">
                <label for="senha">Senha:</label>
                <input type="password" placeholder="********" name="senha" />
              </div>
              <br>
              <div class="card-content">

                <div class="card-content-area">
                  <label for="cpf">CPF:</label>
                  <input type="text" placeholder="Digite seu CPF-CNPJ" name="cpfcnpj" class="cpf-mascara" />
                </div>
                <br>


                <div class="card-content">

                  <div class="card-content-area">
                    <label for="email">Email:</label>
                    <input type="text" placeholder="seuemail@mail.com" name="email" />
                  </div>
                  <div class="card-content">

                    <div class="card-content-area">
                      <label for="tipoUsuario">Tipo Usuario:</label>
                      <input type="text" placeholder="ADMIN OU COMUM" name="tipoUsuario" />
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