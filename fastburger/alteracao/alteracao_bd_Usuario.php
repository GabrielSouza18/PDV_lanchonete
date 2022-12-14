<!-- Chamando a Tabela usuario no banco Para alteração -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM usuario";

$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
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
      width: auto;



      margin-top: 10vh;
      background-color: #ffffff;
      text-align: center;
      border-radius: 5px;
      padding: 20px;
      font-family: 'Poppins', sans-serif;
      font-weight: bold;


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

  <title>Alteração BD Usuario- FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE ALTERAÇÃO CLIente -->
  <div class="container">
    <div class="card">
      <section>
        <form action="../php_action/updateUsuario.php" method="POST">

          <h2>Alterar Usuario</h2>
          <center>
            <img src="../assets/img/usuario.png" width="100px" />
          </center>

          <?php
          require_once '../php_action/db_connect.php';

          $id = $_GET['id'];

          $sql = ("SELECT * FROM usuario WHERE usu_cod LIKE \"%$id%\" group by 1");
          $resultado = mysqli_query($connect, $sql);

          while ($dados = mysqli_fetch_array($resultado)) {

            $nome = $_POST['usu_nome'];
            $senha = $_POST['usu_senha'];
            $cpfcnpj =  $_POST['usu_cpf_cnpj'];
            $email =  $_POST['usu_email'];
            $tipoUsuario =  $_POST['usu_tipo_usu'];
          }
          ?>

          <div class="card-content">
            <div class="linha">

              <div class="card-content-area">
                <label for="nome">COD Usuario:</label>
                <input type="text" name="codigo" value="<?php echo $codigo ?>" readonly>
              </div>

              <div class="card-content-area">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" onkeypress="return somenteLetras()" value="<?php echo $nome ?>" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="cpf">Senha:</label>
                <input type="password" name="senha" value="<?php echo $senha ?> " />
              </div>
              <br />
              <div class="card-content-area">
                <label for="endereco">CPF/CNPJ</label>
                <input type="text" name="cpfcnpj" class="cpf-mascara" value="<?php echo $cpfcnpj ?> " onkeypress="return somenteNumeros()" />
              </div>
              <br /><br />
            </div>
            <div class="linha2">
              <div class="card-content-area">
                <label for="bairro">Email</label>
                <input type="text" name="email" value="<?php echo $email ?>" onkeypress="return somenteLetras()" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="cidade">Tipo de Usuario</label>
                <input type="text" name="tipoUsuario" value="<?php echo $tipoUsuario ?> " onkeypress="return somenteLetras()" />
              </div>
              <br />
            </div>
          </div>
          <button type="submit">Atualizar</button>
        </form>

      </section>
      <a href="../index.html"><button type="submit">Sair</button></a>
    </div>

  </div>
</body>

</html>