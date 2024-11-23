<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pswd']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['pswd'];

        //consulta ao db
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) 
        {
            //login falhou
            unset($_SESSION['email']);
            unset($_SESSION['pswd']);
            header('Location: ../src/login.php');  
            exit;
        }
        else
        {
            //login sucesso
            $_SESSION['email'] = $email;
            $_SESSION['pswd'] = $senha;
            $_SESSION['login_sucess'] = true;
            header('Location: ../src/learn.php?login=sucess');
            exit;
        }
 
    }
    else
    {
        header('Location: ../src/login.php');
        exit;
    }
?>