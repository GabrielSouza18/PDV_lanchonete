<?php
//Inicio do codigo
session_start();
if (!isset($_SESSION['nao_autenticado'])) {
  $_SESSION['nao_autenticado'] = false;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>Login - FastBurger</title>
</head>

<body>
  <!-- CAIXA DE LOGIN -->

    <main class="alinhamento">

      <img src="assets/img/fastburgerlogo.png" alt="logofastburger" id="logo" width="300px" />
  <form action="../fastburger/php_action/loginAcao.php" method="POST">
      <div class="login"><br>
        <h5>Faça seu Login</h5>
        <?php
        if ($_SESSION['nao_autenticado']) {
          //INICIO IF 

        ?>
          <div class="erro"><br>
            <p>Não Autenticado! Verifique o Usuario e a Senha</p>
          </div>
        <?php
        }
        unset($_SESSION['nao_autenticado']);
        //final if
        ?>
        <center>
          <div class="input-icons">
            <i class="fa fa-user icon"></i>
           
            <input class="input-field" type="text" name="usuario" placeholder="Digite o usuario"/>
          </div>
          <div class="input-icons">
            <i class="fa fa-key icon"></i>
           
            <input class="input-field" type="text" name="senha"   placeholder="Digite a senha"/>
          </div><br>


          <label for="robo">Não sou um Robo</label> <input type="checkbox" name="robo" id="robo"><br>
          <button class="success">Login</button>
        </center>
      </div>
    </main>
  </form>
</body>

</html>