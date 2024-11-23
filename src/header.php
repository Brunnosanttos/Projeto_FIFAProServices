<header>
        <h1>FIFAProServices</h1>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <nav>
          <ul class="nav-list">
            <li><a href="../index.php"><button type="button">Início</button></a></li>
            <li><a href="about.php"><button type="button">Sobre nós</button></a></li>
            <li><a href="learn.php"><button type="button">Aprenda e domine</button></a></li>
            <?php if(!isset($_SESSION['email'])): ?>
                <li><a href="login.php"><button type="button">Cadastro/Login</button></a></li>
            <?php endif; ?>
            <?php if(isset($_SESSION['email'])): ?>
                <li><a href="../config/sair.php"><button type="button">Sair</button></a></li>
            <?php endif; ?>
        </ul>   
        </nav>
</header>