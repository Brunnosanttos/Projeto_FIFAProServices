<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pswd']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['pswd'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1) 
        {
            unset($_SESSION['email']);
            unset($_SESSION['pswd']);
            header('Location: login.php');  
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['pswd'] = $senha;
            header('Location: learn.php');
        }
 
    }
    else
    {
        header('Location: login.php');
    }
?>