<?php
    session_start();

    // print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        include_once ('conexao.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // print_r('Usuario: ' . $usuario);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";

        $resultado = $conexao->query($sql);

        print_r($resultado);
        print_r($sql);

        if(mysqli_num_rows($resultado) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header("Location: ../public/index.php");
        }
        else
        {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header("Location: painel.php");
        }

    }else{

    }


?>