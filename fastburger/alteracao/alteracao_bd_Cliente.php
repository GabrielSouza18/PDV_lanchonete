<!-- Chamando a Tabela Cliente no banco Para alteração -->
<?php
require_once '../php_action/db_connect.php';

$sql = "SELECT * FROM cliente";

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
      width: 55rem;
      height: 32rem;


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

  <title>Alteração BD Cliente - FastBurger</title>
</head>

<body>
  <!-- SEÇÃO DE ALTERAÇÃO CLIente -->
  <section>
    <form action="../php_action/updateCliente.php" method="POST">
      <div class="container">
        <div class="card">
          <h2>Alterar Cliente</h2>
          <center>
            <img src="../assets/img/clientes.png" width="100px" />
          </center>
          <div class="card-content">
            <div class="linha">
              <?php
              require_once '../php_action/db_connect.php';

              $id = $_GET['id'];
              $sql = ("SELECT * FROM cliente WHERE cli_cod LIKE \"%$id%\" group by 1");
              $resultado = mysqli_query($connect, $sql);

              while ($dados = mysqli_fetch_array($resultado)) {

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

              }
              ?>
              <div class="card-content-area">
                <label for="nome">codigo:</label>
                <input type="text" placeholder="" name="codigo" value="<?php echo $codigo ?>" onkeypress="return somenteNumeros()" />
              </div>

              <div class="card-content-area">
                <label for="nome">Nome:</label>
                <input type="text" placeholder="Digite o Nome" onkeypress="return somenteLetras()" name="nome" value="<?php echo $nome ?>" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="cpf">CPF/CNPJ:</label>
                <input type="text" placeholder="Digite CPF ou CNPJ" name="cpfcnpj" class="cpf-mascara" value="<?php echo $cpfcnpj ?> " />
              </div>
              <br />
              <div class="card-content-area">
                <label for="endereco">Endereco:</label>
                <input type="text" placeholder="Digite o Endereco" name="endereco" value="<?php echo $endereco ?> " />
              </div>
              <br /><br />
            </div>
            <div class="linha2">
              <div class="card-content-area">
                <label for="bairro">Bairro:</label>
                <input type="text" placeholder="Digite o Bairro" name="bairro" value="<?php echo $bairro ?>" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="cidade">Cidade:</label>
                <input type="text" placeholder="Digite a Cidade" name="cidade" value="<?php echo $cidade ?> " />
              </div>
              <br />
              <div class="card-content-area">
                <label for="celular">Celular:</label>
                <input type="text" placeholder="Digite o Celular" name="celular" class="celular-mascara" value="<?php echo $telefone ?>" />
              </div>
              <br>
              <button type="submit">Atualizar</button><br><br></br>
              <br /><br />
            </div>
            <div class="linha3">
              <div class="card-content-area">
                <label for="email">Email:</label>
                <input type="email" placeholder="seuemail@mail.com" name="email" value="<?php echo $email ?>" />
              </div>
              <br />
              <div class="card-content-area">
                <label for="obs">Observação</label>
                <input type="text" placeholder="Digite uma Observação" name="observacao" value="<?php echo $obs ?>" />
              </div>
              <br>
              <div class="card-content-area">
                <label for="nome">UF:</label>
                <select id="estado" name="uf">
                  <option value="<?php echo $uf ?> "><?php echo $uf ?></option>
                  <option value="AC">Acre</option>
                  <option value="AL">Alagoas</option>
                  <option value="AP">Amapá</option>
                  <option value="AM">Amazonas</option>
                  <option value="BA">Bahia</option>
                  <option value="CE">Ceará</option>
                  <option value="DF">Distrito Federal</option>
                  <option value="ES">Espírito Santo</option>
                  <option value="GO">Goiás</option>
                  <option value="MA">Maranhão</option>
                  <option value="MT">Mato Grosso</option>
                  <option value="MS">Mato Grosso do Sul</option>
                  <option value="MG">Minas Gerais</option>
                  <option value="PA">Pará</option>
                  <option value="PB">Paraíba</option>
                  <option value="PR">Paraná</option>
                  <option value="PE">Pernambuco</option>
                  <option value="PI">Piauí</option>
                  <option value="RJ">Rio de Janeiro</option>
                  <option value="RN">Rio Grande do Norte</option>
                  <option value="RS">Rio Grande do Sul</option>
                  <option value="RO">Rondônia</option>
                  <option value="RR">Roraima</option>
                  <option value="SC">Santa Catarina</option>
                  <option value="SP">São Paulo</option>
                  <option value="SE">Sergipe</option>
                  <option value="TO">Tocantins</option>
                  <option value="EX">Estrangeiro</option>
                </select>
              </div>
              <br />
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</body>
</html>