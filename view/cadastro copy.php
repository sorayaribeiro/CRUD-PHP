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
    <link rel="stylesheet" href="../public/css/cadastro.css">  
    <title>Cadastro de Contrato</title>
    
</head>
<body>   

    <div class="">
        <div class="containner">
            <div class="navbar">
                <div class="perfil">
                    <img src="../source/img/logCNHHELP.png" alt="logo" class="logo">
                </div>
                
                <div class="sidebar">

                    <a href="perfilUsuario.html" class="hover">
                        <span class="material-symbols-outlined">person</span>
                        <span>Perfil do Usuário</span>                            
                    </a>

                    <!-- <a href="perfilEmpresa.html" class="hover">
                        <span class="material-symbols-outlined">store</span>
                        <span>Perfil da empresa</span>                            
                    </a> -->

                    <!-- <a href="rh.html" class="hover">
                        <span class="material-symbols-outlined">person_play</span>
                        <span>Recursos Humanos</span>                            
                    </a> -->

                    <a href="financeiro.html" class="hover">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Financeiro</span>                            
                    </a>

                    <a href="cadastro.html" class="hover">
                        <span class="material-symbols-outlined pagina-atual">groups</span>
                        <span class="pagina-atual">Clientes</span>                            
                    </a>

                    <a href="marketing.html" class="hover">
                        <span class="material-symbols-outlined">support_agent</span>
                        <span>Marketing</span>                           
                    </a>

                    <a href="servicos.html" class="hover">
                        <span class="material-symbols-outlined">folder_open</span>
                        <span>Serviços</span>                            
                    </a>

                    <a href="dashboard.html" class="hover">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>Painel</span>                                
                    </a>

                </div>                

                <div class="acount">
                    <div class="name">
                        <span>Nome do funcionario</span>
                    </div>
                    <div class="exit">                    
                        <span>Sair</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="container" class="">
            <div class="boxContainer">
                <div class="" id="titulo">
                    <h2>Cadastro de Contrato</h2>
                </div>
                <div class="">
                    <div class="dados">
                        <table>
                            <thead>
                                <tr>
                                    <td>
                                        <label>Contrato</label><br>
                                        <input type="number" id="contrato">
                                    </td>
                                    <td colspan="2"> 
                                        <label>Contratante:</label><br>
                                        <input type="text" id="contratante">
                                    </td>
                                    <td>
                                        <label>Valor do Contrato:</label><br>
                                        <input id="valorContrato">
                                    </td>
                                    <td>
                                        <label>Vendedor:</label><br>
                                        <select id="vendedor">
                                            <option value="">Selecione o vendedor</option>
                                            <option value="funcionario1">Andreza</option>
                                            <option value="funcionario2">Amanda</option>
                                            <option value="funcionario3">Silvia</option>
                                            <option value="funcionario4">Felipe</option>
                                            <option value="funcionario5">Vera</option>
                                        </select>    
                                    </td>
                                    <td>
                                        <label>Data</label>
                                        <input type="date" id="agora">
                                    </td>
                                </tr>
                            </thead>

                     <tbody>
                                <tr>
                                    <td>
                                        <label>CPF:</label><br>
                                        <input type="text" id="cpf">
                                    </td>
                                    <td>
                                        <label>CNH:</label><br>
                                        <input type="text" id="cnh">
                                    </td>
                                    <td>
                                        <label>Primeira CNH:</label><br>
                                        <input type="date" id="firstCNH">
                                    </td>
                                    <td>
                                        <label>RG:</label><br>
                                        <input type="text" id="rg">
                                    </td>                                
                                                             
                                    <td>
                                        <label>Telefone:</label><br>
                                        <input type="text" id="phone">
                                    </td>
                                    <td colspan="2">
                                        <label>Email:</label><br>
                                        <input type="text" id="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label>Endereço:</label><br> 
                                        <input type="text" id="address">
                                    </td>
                                    <td>
                                        <label>Número:</label><br> 
                                        <input type="number" id="numberaddress">
                                    </td>  
                                    <td>
                                        <label>Bairro:</label><br>
                                        <input type="text">
                                    </td>
                                    <td>
                                        <label>Cidade:</label><br>
                                        <input type="text">
                                    </td>
                                </tr>
    
                                
                                <tr>
                                    <td colspan="5">
                                        <label>Observações:</label><br>
                                        <textarea name="Observações" id="Observações" style="width: 100%;" rows="2"></textarea>
                                    </td>
                                    
                                </tr>
                                
                                                                    
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <ul id="listaServicos">

                    </ul>
                    <div class="servico">
                        
                        <table>
                            <tr>
                                <td>Serviço:<br>
                                    <select id="servicos">
                                        <option value="">Selecione o serviço</option>
                                        <option value="multa">Multas</option>
                                        <option value="suspensao">Suspensão</option>
                                        <option value="cassacao">Cassação</option>
                                        <option value="leiseca">Lei Seca</option>                                     
                                    </select>
                                </td>
                                <td>Código do DETRAN:<br><input id="codigodetran" type="text"></td>
                                <td>Valor: <br><input id="valor" type="number"></td>
                                <td class="addservice"><button id="adicionar" onclick="addServico()">Adicionar serviço</button></td>
                            </tr>
                        </table>
                    </div>
                  
                
                    <hr>
                    <div id="fileDocs">
                        <table>
                            <tr>
                                            
                                <td colspan="2">Comprovante de Residência:<br>
                                    <input type="file" id="pdfFile" accept=".pdf">
                                    <label for="pdfFile" id="pdfFileName">Nenhum arquivo selecionado</label>
                                </td>
                                
                                <td colspan="2">Foto da CNH:<br>
                                    <input type="file" id="imageFile" accept=".pdf, .jpg, .png">
                                    <label for="imageFile" id="imageFileName">Nenhum arquivo selecionado</label>
                                </td>
                                
                            </tr> 
                        </table>
                    </div>
                    <hr>
                    
                </div>
                <div class="guardar">
                    <button id=save onclick="saveData()">Salvar</button>
                </div>
                
            </div>
            
            <div class="contratosSalvos">
                <div class="box-dados" > <!--Caixa com informação -->
                    <div class="item-lista" onclick="toggleDetails('detalhes1')">  
                        <div class="" id="titulo">
                            <h2>Cadastro de Contrato</h2>
                        </div>        
                        <table>  
                            <thead>
                                <tr class="uni-item">
                                    <td>
                                        <label>Contrato:</label><br>
                                        <span>R3250008</span>                
                                    
                                    </td>
                                    <td> 
                                        <label>Contratante:</label><br>
                                        <span>Soraya Ribeiro</span> 
                                    </td>
                                    <td>
                                        <label>Valor do Contrato:</label><br>
                                        <span>R$ 128,00
                                        </span> 
                                    </td>
                                    <td>
                                        <label>Vendedor:</label><br>
                                        <span>Andreza Bastos</span> 
                                    <td>
                                        <label>Data:</label><br>
                                        <span>30/10/2023</span> 
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
        
                    <div class="detalhes" id="detalhes1">
                        <table>
                            <tbody>
                                <tr>
                                    <td>CPF: <br><input type="text" id="cpf"></td>
                                    <td>CNH: <br><input type="text" id="cnh"></td>
                                    <td>Primeira CNH: <br><input type="text" id="firstCNH"></td>
                                    <td>RG: <br><input type="text" id="rg"></td>                                
                                </tr>
    
                                <tr>                                
                                    <td>Telefone: <br><input type="text" id="phone"></td>
                                    <td>Email: <br><input type="text" id="email"></td>
                                    <td colspan="2">Endereço:<br> <input type="text" id="address"></td>
                                    <td>Número:<br> <input type="number" id="numberaddress"></td>  
                                </tr>
    
                                
                                <tr>
                                    <td colspan="5">Observações:<br>
                                    <textarea name="Observações" id="Observações" cols="100" rows="4"></textarea>
                                    </td>
                                    
                                </tr>
                                
                                                                    
                            </tbody>
                        </table>
                        <div class="row">
                            
                        </div>
                    </div>
                             
                </div> 
            </div>
        </div>
    </div>

   <script>

        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("pdfFile").addEventListener("change", function() {
                const fileName = this.files[0] ? this.files[0].name : "Nenhum arquivo PDF selecionado";
                document.getElementById("pdfFileName").textContent = fileName;
            });

            document.getElementById("imageFile").addEventListener("change", function() {
                const fileName = this.files[0] ? this.files[0].name : "Nenhum arquivo de imagem selecionado";
                document.getElementById("imageFileName").textContent = fileName;
            });
        });

        function addServico() {
            const servicoDiv = document.querySelector(".servico");
            const servicoTable = servicoDiv.querySelector("table");
            const servicoSelect = servicoTable.querySelector("#servicos");
            const codigodetranInput = servicoTable.querySelector("#codigodetran");
            const valorInput= servicoTable.querySelector("#valor");

            const servicos = servicoSelect.value;
            const codigodetran = codigodetranInput.value;
            const valor = valorInput.value;

            if (servicos && codigodetran && valor) {
                const listaServicos = document.getElementById("listaServicos");
                const listItem = document.createElement("li");
                listItem.textContent = `Serviço: ${servicos}, Código do DETRAN: ${codigodetran}, Valor: ${valor}`;
                const removeButton = document.createElement('span');
                removeButton.textContent = 'X';
                removeButton.classList.add('remove-button');
                removeButton.onclick = function() {
                    listaServicos.appendChild(listItem);
                };
                listItem.appendChild(removeButton);
                listaServicos.appendChild(listItem);

                // Limpar os campos de entrada
                document.getElementById('servicos').value = "";
                document.getElementById('codigodetran').value = "";
                document.getElementById('valor').value = "";
            }
        };

        function toggleDetails(id) {
            const detalhes = document.getElementById(id);
            detalhes.style.display = detalhes.style.display === 'block' ? 'none' : 'block';
        }

        $(document).ready(function() {
            $(".item-lista").click(function() {
                $(this).find(".detalhes").toggle();
            });
        });
</script>

</body>
</html>