<?php

if(!empty($_GET['id']))
{   
    include_once('../controller/conexao.php');

    $contrato = $_GET['id'];
    
    $sqlSelec = "SELECT * FROM contratosteste WHERE contrato=$contrato";

    $result = $conexao->query($sqlSelec);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM contratosteste WHERE contrato=$contrato";
        $resultDelete = $conexao->query($sqlDelete);
    }
}

header('Location: contratos.php');
?>