<?php

  $login_status = isset($_GET['login']) ? $_GET['login'] : '';
  $account_status = isset($_GET['account']) ? $_GET['account'] : '';
  $logout_status = isset($_GET['logout']) ? $_GET['logout'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFAProServices</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/mobile-navbar.js"></script>
    <script src="js/scripts.js" defer></script>
</head>
<body data-account="<?php echo htmlspecialchars($account_status); ?>" data-login="<?php echo htmlspecialchars($login_status); ?>" data-logout="<?php echo htmlspecialchars($logout_status); ?>">
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
                        <form class="form-login" action="config/testLogin.php" method="POST">
                            <label for="chk" aria-hidden="true">Login</label>
                            <input class="input-login" type="email" name="email" placeholder="Email" required>
                            <input class="input-login" id="login-password" type="password" name="pswd" placeholder="Senha" required>
                            <button type="submit" name="submit" id="submit">Login</button>
                        </form>
                    </div>

            <div class="register">
                        <form class="form-register" action="config/testCadastro.php" method="POST">
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
  </body>
</html>