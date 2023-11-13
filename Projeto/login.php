<?php
    include("Conexao.php");

    $email=$_POST['email'];
    $senha=$_POST['senha'];


    $sql="SELECT * FROM users Where email='$email' And  senha= '$senha' ";
    $resultado=mysqli_query($conexao, $sql);
    $linhas=mysqli_affected_rows($conexao);

    if ($linhas>0) {
            
    

        session_start();
        $_SESSION['users']=$email;
        header('Refresh: 1; url=index.php'); }
        else {
                echo("falha ao logar! nome ou senha incorreto");
        }
          

    


    ?>