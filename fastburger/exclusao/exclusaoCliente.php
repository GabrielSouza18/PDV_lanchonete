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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />
 
    <style>
      
body{
background-color: #181a1b;
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
}
.card{
    width: auto;
   
    
    margin-top: 10vh;
    background-color: #ffffff;
    text-align: center;
    border-radius: 5px;
    padding: 20px;
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
   
    
}


input{
    width: 95%;
    border-top: none;
    border-left: none;
    border-right: none;
    box-shadow: 0 0 0 0;
    outline: 0
}

button{
    margin-top: 3rem;
    font-family: 'Poppins', sans-serif;
    border-radius: 5px;
    width: 7rem;
    height: 2rem;
    background-color: white;
    transition: background
   0.3s;
}
button:hover{
    color: white;
    background: #181a1b;

   
}
    </style>

    <title>Exclusão Cliente - FastBurger</title>
  </head>
  <body>
      <!-- SEÇÃO DE Exclusão DE CLIENTE -->
      <div class="container">
          <div class="card">
    <section>
      <form action="exclusaoCompletaCliente.php" method="POST">
      
            <h2>Exclusão Cliente</h2>
            <center>
              <img src="../assets/img/clientes.png" width="100px"/>
            </center>
            <div class="card-content">
          
              <div class="card-content-area">
              <label for="nomeCliente">Nome Cliente:</label>
              <input type="text" name="nomeCliente" />
              </div>
              <button type="submit" >Pesquisar</button>
              </form>
    </section>
 <a href="../index.html"><button type="submit">Sair</button></a>
          </div>
        </div>
     
  </body>
</html>
