<?php

$servidor="localhost";
$username="root";
$password= "" ;
$dbname="cnhhelp";

$conexao = new mysqli($servidor,$username,$password,$dbname);

// if($conexao->connect_errno)
// {
//     echo "Erro de Conexão:";
// }else{
//     echo "Conexão efetuada com sucesso!";
// }

// $query= "Insert into cadastro (contrato, contratante, valorContrato, vendedor, agora, cpf, cnh, firstCNH, rg, telefone, email, rua, numberrua, complemento, bairro, cidade) values('$contrato', '$contratante', '$valorContrato', '$vendedor', '$dataCadastro', '$cpf', '$cnh', '$firstCNH', '$rg', '$telefone', '$email', '$rua', '$numberrua', '$complemento', '$bairro', '$cidade')";
// $resultado = mysqli($conexao, $query);

?>