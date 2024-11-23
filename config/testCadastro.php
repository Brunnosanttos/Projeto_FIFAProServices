<?php
session_start();

// Verifica se o formulário foi enviado
if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');

    // Recupera os dados do formulário
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Verifica se o e-mail já existe no banco de dados
    $checkEmail = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
    
    if (mysqli_num_rows($checkEmail) > 0) {
        // E-mail já existe
        header('Location: ../login.php?account=exists');
        exit;
    } else {
        // Insere o novo usuário no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        
        if (mysqli_query($conexao, $sql)) {
            // Conta criada com sucesso
            header('Location: ../login.php?account=success');
            exit;
        } else {
            // Erro na criação da conta
            header('Location: ../login.php?account=error');
            exit;
        }
    }
} else {
    // Redireciona para o login se os campos não foram preenchidos
    header('Location: ../login.php');
    exit;
}
?>
