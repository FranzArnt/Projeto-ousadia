<?php
    include("Conexao.php");


    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    $email =$_POST['email'];
    $cpf =$_POST['cpf'];
    $endereco =$_POST['endereco'];
    $complemento =$_POST['complemento'];

    
    
    $sql="INSERT INTO users (nome, senha, email, cpf, endereco, complemento)
            VAlUES ( '$nome' ,'$senha', '$email','$cpf','$endereco', '$complemento' )";


    if(mysqli_query($conexao, $sql)) {
        echo "<script language='javascript'>";
    echo "alert('Usuário cadastrado com Sucesso!');";
    echo "</script>";

            header('Refresh: 1; url=login.html');
    }


    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    Mysqli_close($conexao)
    ?>
  