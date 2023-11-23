<?php
      
    $titulo = "Contrato";
    include "sidebar.php";
    include "../controller/conexao.php";

    if(!empty($_GET['id']))
    {   
        $contrato = $_GET['id'];
        
        $sqlSelec = "SELECT * FROM contratosteste WHERE contrato=$contrato";

        $result = $conexao->query($sqlSelec);

        if($result->num_rows > 0){
            while($user_data = mysqli_fetch_assoc($result))
            {
                $contrato= $user_data['contrato'];
                $contratante= $user_data['contratante'];
                $valorContrato= $user_data['valorContrato'];
                $vendedor= $user_data['vendedor'];
                $agora= $user_data['agora'];
                $cpf= $user_data['cpf'];
                $cnh= $user_data['cnh'];
                $firstCNH= $user_data['firstCNH'];
                $rg= $user_data['rg'];
                $telefone= $user_data['telefone'];
                $email= $user_data['email'];
                $rua= $user_data['rua'];
                $numerocasa= $user_data['numerocasa'];
                $complemento= $user_data['complemento'];
                $bairro= $user_data['bairro'];
                $cidade= $user_data['cidade'];
                $observacoes= $user_data['observacoes'];
            }
           
        }
        else
        {
            header('Location: contratos.php');
        }
        
        

    
    }

?>
                <div class="boxContainer">
                    <div class="row" id="titulo">
                        <h2>Cadastro de Contrato</h2>
                    </div>
                    
                    <div class="row" id="cadastrocontrato">
                        <div class="dados">
                            <form action="saveEdit.php" method="post">
                                <table>
                                    <tr>
                                        <td>
                                            <label>Contrato</label><br>
                                            <input type="text" name="contrato" class="" value="<?php echo $contrato ?>">
                                        </td>
                                        <td colspan="2"> 
                                            <label>Contratante:</label><br>
                                            <input type="text" name="contratante" class="" value="<?php echo $contratante ?>">
                                        </td>
                                        <td>
                                            <label>Valor do Contrato:</label><br>
                                            <input type="text" name="valorContrato" class="" value="<?php echo $valorContrato ?>">
                                        </td>
                                        <td>
                                            <label>Vendedor:</label><br>
                                            <input type="text" id="vendedor" name="vendedor" value="<?php echo $vendedor ?>">
                                                                           
                                        </td>
                                        <td>
                                            <label>Data</label>
                                            <input type="date" name="agora" class="form-date" value="<?php echo $agora ?>">
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            <label>CPF:</label><br>
                                            <input type="text" name="cpf" id="cpf" class="" value="<?php echo $cpf ?>">
                                        </td>
                                        <td>
                                            <label>CNH:</label><br>
                                            <input type="text" name="cnh" id="cnh" class="" value="<?php echo $cnh ?>">
                                        </td>
                                        <td>
                                            <label>Primeira CNH:</label><br>
                                            <input type="date" name="firstCNH" id="firstCNH" class="" value="<?php echo $firstCNH ?>">
                                        </td>
                                        <td>
                                            <label>RG:</label><br>
                                            <input type="text" name="rg" id="rg" class="" value="<?php echo $rg ?>">
                                        </td>                                
                                                                
                                        <td>
                                            <label>Telefone:</label><br>
                                            <input type="text" name="telefone" id="telefone" class="" value="<?php echo $telefone ?>">
                                        </td>
                                        <td colspan="2">
                                            <label>Email:</label><br>
                                            <input type="email" name="email" id="email" class="" value="<?php echo $email ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <label>Endereço:</label><br> 
                                            <input type="text" name="rua" class="" value="<?php echo $rua ?>">
                                        </td>
                                        <td>
                                            <label>Número:</label><br> 
                                            <input type="text" name="numerocasa" id="numerocasa" class="" value="<?php echo $numerocasa ?>">
                                        </td>  
                                        <td>
                                            <label>Complemento:</label><br> 
                                            <input type="text" name="complemento" id="complemento" class="" value="<?php echo $complemento ?>">
                                        </td>  
                                        <td>
                                            <label>Bairro:</label><br>
                                            <input type="text" name="bairro" id="bairro" class="" value="<?php echo $bairro ?>">
                                        </td>
                                        <td>
                                            <label>Cidade:</label><br>
                                            <input type="text" name="cidade" id="cidade" class="" value="<?php echo $cidade ?>">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td colspan="5">
                                            <label>Observações:</label><br>
                                            <textarea name="observacoes" id="observacoes" style="width: 100%;" rows="2" value="<?php echo $observacoes ?>"></textarea>
                                        </td>
                                        
                                    </tr>
                                </table> 
                                <div class="" id="salvar">
                                    <button type="submit" name="update" id="update">Salvar</button>
                                </div> 
                            </form>
                        </div> 
                    </div>
                    
                    
                </div>
                
      

          



<?php
    include "footer.php";

?>

