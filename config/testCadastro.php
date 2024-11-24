<?php
session_start();

// Verifica se o formulário foi enviado
if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');

    // Recupera e sanitiza os dados do formulário
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = trim($_POST['senha']);

    // Valida a senha (8 caracteres, maiúsculas, minúsculas, números)
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $senha)) {
        header('Location: ../login.php?account=invalid_password');
        exit;
    }

    // Verifica se o e-mail já existe no banco de dados
    $checkEmail = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        // E-mail já existe
        header('Location: ../login.php?account=exists');
        exit;
    } else {
        // Criptografa a senha antes de salvar
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere o novo usuário no banco de dados
        $sql = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $nome, $email, $senhaHash);

        if ($sql->execute()) {
            // Conta criada com sucesso
            header('Location: ../login.php?account=success');
            exit;
        } else {
            // Erro na criação da conta
            error_log("Erro ao inserir usuário: " . $conexao->error); // Log de erro
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
