<?php

    include_once('../controller/conexao.php');


    if(isset($_POST['update'])){
        $contrato= $_POST['contrato'];
        $contratante= $_POST['contratante'];
        $valorContrato= $_POST['valorContrato'];
        $vendedor= $_POST['vendedor'];
        $agora= $_POST['agora'];
        $cpf= $_POST['cpf'];
        $cnh= $_POST['cnh'];
        $firstCNH= $_POST['firstCNH'];
        $rg= $_POST['rg'];
        $telefone= $_POST['telefone'];
        $email= $_POST['email'];
        $rua= $_POST['rua'];
        $numerocasa= $_POST['numerocasa'];
        $complemento= $_POST['complemento'];
        $bairro= $_POST['bairro'];
        $cidade= $_POST['cidade'];
        $observacoes= $_POST['observacoes'];

        $sqlUpdate = "UPDATE contratosteste SET contrato='$contrato', contratante='$contratante', valorContrato='$valorContrato', vendedor= '$vendedor', agora= '$agora', cpf= '$cpf', cnh='$cnh', firstCNH= '$firstCNH',rg='$rg', telefone='$telefone', email='$email', rua='$rua', numerocasa='$numerocasa', complemento='$complemento', bairro='$bairro', cidade='$cidade', observacoes='$observacoes'where contrato='$contrato'";
        
        $result = $conexao->query($sqlUpdate);
    }
    header('Location: contratos.php');

?>