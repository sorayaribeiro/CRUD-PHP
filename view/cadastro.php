<?php
    $titulo = "Cadastro de contrato";
    include "sidebar.php";
    include "conexao.php";

    if(isset($_POST['submit']))
    {            
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

    $resultado = mysqli_query($conexao, "INSERT INTO contratosteste(contrato, contratante, valorContrato, vendedor, agora, cpf, cnh, firstCNH, rg, telefone, email, rua, numerocasa, complemento, bairro, cidade, observacoes) 
    VALUES('$contrato', '$contratante', '$valorContrato', '$vendedor', '$agora', '$cpf', '$cnh', '$firstCNH', '$rg', '$telefone', '$email', '$rua', '$numerocasa', '$complemento', '$bairro', '$cidade', '$observacoes')");
                        
    }

    $sql = "SELECT * FROM contratosteste ORDER BY contrato DESC";

    $result = $conexao->query($sql);


?>
                <div class="boxContainer">
                    <div class="row" id="titulo">
                        <h2>Cadastro de Contrato</h2>
                    </div>
                    
                    <div class="row" id="cadastrocontrato">
                        <div class="dados">
                            <form action="cadastro.php" method="post">
                                <table>                               
                                        <tr>
                                            <td>
                                                <label>Contrato</label><br>
                                                <input type="text" name="contrato" class="">
                                            </td>
                                            <td colspan="2"> 
                                                <label>Contratante:</label><br>
                                                <input type="text" name="contratante" class="">
                                            </td>
                                            <td>
                                                <label>Valor do Contrato:</label><br>
                                                <input type="text" name="valorContrato" class="">
                                            </td>
                                            <td>
                                                <label>Vendedor:</label><br>
                                                <select id="vendedor" name="vendedor">
                                                    <option value="">Selecione o vendedor</option>
                                                    <option value="Andreza">Andreza</option>
                                                    <option value="Amanda">Amanda</option>
                                                    <option value="Silvia">Silvia</option>
                                                    <option value="Felipe">Felipe</option>
                                                    <option value="Vera">Vera</option>
                                                </select>    
                                            </td>
                                            <td>
                                                <label>Data</label>
                                                <input type="date" name="agora" class="form-date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>CPF:</label><br>
                                                <input type="text" name="cpf" id="cpf" class="">
                                            </td>
                                            <td>
                                                <label>CNH:</label><br>
                                                <input type="text" name="cnh" id="cnh" class="">
                                            </td>
                                            <td>
                                                <label>Primeira CNH:</label><br>
                                                <input type="date" name="firstCNH" id="firstCNH" class="">
                                            </td>
                                            <td>
                                                <label>RG:</label><br>
                                                <input type="text" name="rg" id="rg" class="">
                                            </td>                                
                                                                    
                                            <td>
                                                <label>Telefone:</label><br>
                                                <input type="text" name="telefone" id="telefone" class="">
                                            </td>
                                            <td colspan="2">
                                                <label>Email:</label><br>
                                                <input type="email" name="email" id="email" class="">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="2">
                                                <label>Endereço:</label><br> 
                                                <input type="text" name="rua" class="">
                                            </td>
                                            <td>
                                                <label>Número:</label><br> 
                                                <input type="text" name="numerocasa" id="numerocasa" class="">
                                            </td>  
                                            <td>
                                                <label>Complemento:</label><br> 
                                                <input type="text" name="complemento" id="complemento" class="">
                                            </td>  
                                            <td>
                                                <label>Bairro:</label><br>
                                                <input type="text" name="bairro" id="bairro" class="">
                                            </td>
                                            <td>
                                                <label>Cidade:</label><br>
                                                <input type="text" name="cidade" id="cidade" class="">
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="5">
                                                <label>Observações:</label><br>
                                                <textarea name="observacoes" id="observacoes" style="width: 100%;" rows="2"></textarea>
                                            </td>                                            
                                        </tr>
                                </table> 
                                <div class="" id="salvar">
                                    <button type="submit" name="submit" id="submit">Salvar</button>
                                </div> 
                            </form>
                        </div> 
                    </div>
                    
                    <div class="listacontratos">
                        <?php
                            include "contratosSalvos.php";
                        ?>
                    </div>
                    
                </div>
                
      

          



<?php
    include "footer.php";

?>

