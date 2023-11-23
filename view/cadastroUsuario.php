<?php
  include "../controller/conexao.php";

  if(isset($_POST['submit']))
  {            
    $username= $_POST['username'];
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];
      

  $result = mysqli_query($conexao, "INSERT INTO usuarios(username, nome, email, senha) VALUES('$username','$nome','$email','$senha')");
                      
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div id="box-signup">
        
        
        <form action="cadastroUsuario.php" method="post">
           
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" placeholder="crie seu usuário"><br>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome"><br>
                
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email"><br>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" placeholder="Crie uma senha"><br>
                      
            <br>       
            
            <input class="" type="submit" name="submit" value="Enviar">          
        
        </form>
    </div>
    
</body>
</html>