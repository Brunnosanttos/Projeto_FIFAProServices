<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pswd'])) {
    include_once('config.php');
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = $_POST['pswd'];

    // Consulta ao banco para buscar o usuário pelo e-mail
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // E-mail encontrado, agora verifica a senha
        $usuario = $result->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['login_success'] = true;

            header('Location: ../learn.php?login=success');
            exit;
        } else {
            // Senha incorreta
            header('Location: ../login.php?login=error');
            exit;
        }
    } else {
        // E-mail não encontrado
        header('Location: ../login.php?login=error');
        exit;
    }
} else {
    // Campos não preenchidos
    header('Location: ../login.php');
    exit;
}
?>
