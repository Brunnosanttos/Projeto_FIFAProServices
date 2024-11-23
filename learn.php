<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and(!isset($_SESSION['pswd']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['pswd']);
        header('Location: login.php');
        exit;
    }
    $logado = $_SESSION['email'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFAProServices</title>
    <link rel="stylesheet" href="css/learn.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/scripts.js" defer></script>
</head>
<body data-login="<?php echo $login_success ? 'success' : ''; ?>">
  <?php include 'header.php' ?>
    <div class="container">
        <div class="text">
            <h1>Aprenda os melhores dribles</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Como fazer</th>
                    <th>Dribles</th>
                    <th>Exemplos</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>⬅️ x2 para trás</td>
                <td>Com este drible aqui, você se reposiciona e abre espaço para seguir jogando de forma rápida e simples.</td>
                <td><a href="https://youtu.be/sEWt3Sqg430" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>Meia Lua para esquerda ou direita</td>
                <td>O elástico parece um movimento simples, mas é muito eficiente.</td>
                <td><a href="https://youtu.be/XDIJwrHzVj0" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>L2 [segurar] + Quadrado + X</td>
                <td>Corte de calcanhar.</td>
                <td><a href="https://youtu.be/sJw48AWKXQ4" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>L1 + R1 [segurar] + ⬆️ ou ⬇️ no analógico esquerdo</td>
                <td>Pisada do Futsal.</td>
                <td><a href="https://youtu.be/2A6JRcwPS8Q" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>L1 [segurar] + Quadrado + X</td>
                <td>Corte “arrastado”.</td>
                <td><a href="https://youtu.be/FHMs4TMDiqA" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>↗️ ou ↘️ – para mais longas, utilizar meia lua</td>
                <td>Pedalada rápida.</td>
                <td><a href="https://youtu.be/qu-u6JU6d3c" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>L1 + R1 [segurar] + ⬅️ ou ➡️ no analógico esquerdo</td>
                <td>Adiantada com pisada</td>
                <td><a href="https://youtu.be/3kEUndhYKFY" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>Segurar R1</td>
                <td>Pique controlado</td>
                <td><a href="https://youtu.be/Ly_U7txKmw4" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>⬆️ ou ⬇️</td>
                <td>Rolada (ou ball roll)</td>
                <td><a href="https://youtu.be/XOU_lp5JDgM" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            <tr>
                <td>⬅️ e ➡️</td>
                <td>Carretilha.</td>
                <td><a href="URL_DO_LINK_AQUI" class="link-button" target="_blank">Abrir</a></td>
            </tr>
            </tbody>
        </table>
    </div>        
    <?php include 'footer.php'; ?>
    <script src="js/mobile-navbar.js"></script>
</body>
</html>