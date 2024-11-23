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

        if ($result && mysqli_num_rows($result) > 0) {
            // Login bem-sucedido
            $_SESSION['email'] = $email;
            $_SESSION['pswd'] = $senha;
            $_SESSION['login_success'] = true;
    
            header('Location: ../learn.php?login=success');
            exit;
        } else {
            // Login falhou
            unset($_SESSION['email']);
            unset($_SESSION['pswd']);
            header('Location: ../login.php?login=error');
            exit;
        }
    } else {
        // Redireciona para a página de login se os campos estiverem vazios
        header('Location: ../login.php');
        exit;
    }
?>