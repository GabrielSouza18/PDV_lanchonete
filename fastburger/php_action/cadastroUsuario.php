<!-- INCLUSÃO DO USUARIO NO BANCO -->
<?php
    include '../php_action/db_connect.php';
   
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $cpfcnpj =  $_POST['cpfcnpj'];
        $email =  $_POST['email'];
        $tipoUsuario =  $_POST['tipoUsuario'];

        
    	
        $sql = "INSERT INTO usuario (usu_nome,usu_senha,usu_cpf_cnpj,usu_email,usu_tipo_usu) 
                VALUES ('$nome','$senha','$cpfcnpj','$email','$tipoUsuario')";
               
        if(mysqli_query($connect, $sql)){
            echo "Cadastrado com sucesso!";
            header('Location:../index.html');
        }
        else{
            echo "Erro ao cadastrar";
        }
?>
