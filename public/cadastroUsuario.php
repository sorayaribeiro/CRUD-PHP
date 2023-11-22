<?php
  include "../view/conexao.php";

  if(isset($_POST['submit']))
  {            
    $usuario= $_POST['usuario'];
    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];
      

  $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, nome, email, senha) VALUES('$usuario','$nome','$email','$senha')");
          
  header('Location: index.php');
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
           
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario"><br><br>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"><br><br>
                
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"><br><br>
                      
            <br>       
            
            <input class="" type="submit" name="submit" value="Enviar">          
        
        </form>
    </div>
    
</body>
</html>