<?php

    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['pswd']);
    header('Location: ../src/login.php');

?>