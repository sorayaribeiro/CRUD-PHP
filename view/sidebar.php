<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/pages.css">
    <link rel="icon" type="image/x-icon" href="../source/img/logo.png">
    <title><?php echo $titulo; ?></title>
    
</head>
<body>   

    <div class="">
        <div class="containner">
            <div class="navbar">
                <div class="perfil">
                    <img src="../public/img/logCNHHELP.png" alt="logo" class="logo">
                </div>
                
                <div class="sidebar">

                    <a href="perfil.php" class="hover">
                        <span class="material-symbols-outlined">person</span>
                        <span>Perfil do Usuário</span>                            
                    </a>

                    <a href="financeiro.php" class="hover">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Financeiro</span>                            
                    </a>

                    <a href="cadastro.php" class="hover">
                        <span class="material-symbols-outlined">groups</span>
                        <span class="">Cadastro</span>                            
                    </a>

                    <a href="marketing.php" class="hover">
                        <span class="material-symbols-outlined">support_agent</span>
                        <span>Marketing</span>                           
                    </a>

                    <a href="servicos.php" class="hover">
                        <span class="material-symbols-outlined">folder_open</span>
                        <span>Serviços</span>                            
                    </a>

                    <a href="painel.php" class="hover">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>Painel</span>                                
                    </a>

                </div>                

                <div class="acount">
                    <div class="name">
                        <span>Nome do funcionario</span>
                    </div>
                    <div class="exit">                    
                        <a href="sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="container" class="">