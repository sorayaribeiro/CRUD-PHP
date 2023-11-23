<?php
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="login-container">
        <img src="/img/logCNHHELP.png" id="logoLogin" alt="Logo">
        <form action="testelogin.php" method="post">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" placeholder="Informe seu usuário">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <div class="forgot-password">
                    <a href="#">Esqueci a senha</a>
                </div>
                <label for="remember">
                    <input type="checkbox" id="remember" name="remember"> Lembrar neste local
                </label>
            </div>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>