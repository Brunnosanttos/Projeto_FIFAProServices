<?php

  if(isset($_POST['submit']))
  {
    include_once('../config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFAProServices</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <?php include 'header.php' ?>
    <div class="textoH1">
      <h1>Crie uma conta</h1>
    </div>
    <div class="textoP">
      <p>Faça o login e tenha acesso às melhores dicas e dribles do EA FC 24 e aprimore todo seu conhecimento no fifinha</p>
    </div>
    <div class="login-container">
        <div class="main">  	
                <input type="checkbox" id="chk" aria-hidden="true">
                    <div class="login">
                        <form class="form-login" action="../config/testLogin.php" method="POST">
                            <label for="chk" aria-hidden="true">Login</label>
                            <input class="input-login" value="bruno@gmail.com" type="email" name="email" placeholder="Email" required>
                            <input class="input-login" type="password" name="pswd" placeholder="Senha" required>
                            <button type="submit" name="submit" id="submit">Login</button>
                        </form>
                    </div>

            <div class="register">
                        <form class="form-register" action="login.php" method="POST">
                            <label for="chk" aria-hidden="true">Cadastro</label>
                            <input class="input-register" type="text" name="nome" placeholder="Nome do usuário" required>
                            <input class="input-register" type="email" name="email" placeholder="Email" required>
                            <input class="input-register" type="password" name="senha" placeholder="Senha" required>
                            <button type="submit" name="submit" id="submit">Cadastrar</button>
                        </form>
                    </div>
            </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="../js/mobile-navbar.js"></script>
  </body>
</html>