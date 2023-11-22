<?php
    session_start();

    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['senha']))
    {
        include_once ('conexao.php');
        $username = $_POST['username'];
        $senha = $_POST['senha'];

        // print_r('Usuario: ' . $username);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE username = '$username' and senha = '$senha'";

        $resultado = $conexao->query($sql);

        print_r($resultado);
        print_r($sql);

        if(mysqli_num_rows($resultado) < 1)
        {
            unset($_SESSION['username']);
            unset($_SESSION['senha']);
            header("Location: ../public/index.php");
        }
        else
        {
            $_SESSION['username'] = $username;
            $_SESSION['senha'] = $senha;
            header("Location: painel.php");
        }

    }else{

    }


?>