<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['senha']);
    header("Location: ../public/index.php");

?>