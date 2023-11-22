<?php
    $titulo = "Dashboard";
    include "sidebar.php";

    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['username']);
        unset($_SESSION['senha']);
        header('Location: ../public/index.php');
    }
    $logado = $_SESSION['username'];
?>
            <div class="boxContainner row">
                <div class="" id="titulo">
                    <span class=""><h2>Painel</h2></span>
                </div>
    
                <div class="painel" id="mes">
                    <div class="col data-ref">
                        <label for="monthSelect">Selecione o mês:</label>
                        <select id="monthSelect">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="3">Abril</option>
                            <option value="3">Maio</option>
                            <option value="3">Junho</option>
                            <option value="3">Julho</option>
                            <option value="3">Agosto</option>
                            <option value="3">Setembro</option>
                            <option value="3">Outubro</option>
                            <option value="3">Novembro</option>
                            <option value="3">Dezembro</option>                    
                        </select>
                        <button onclick="selecionarMes()">Filtrar</button>
    
                        </select>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
                <div class="d-flex row info-l-1">
    
                    <div class="box-leiseca col-lg-3">
                        <div id="interior-box">
                            <div class="icone">
                                <img src="../img/Icons/gavel_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                            </div>
                            <div class="dados">
                                <h4>Lei seca</h4>
                                <span>1.214</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="box-suspensao col-lg-3">
                        <div id="interior-box">                            
                            <div class="icone">
                                <img src="../img/Icons/block_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                            </div>
                            <div class="dados">
                                <h4>Suspensão</h4>
                                <span>478</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="box-cassacao col-lg-3">
                        <div id="interior-box">
                            <div class="icone">
                                <img src="../img/Icons/target_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                            </div>
                            <div class="dados">
                                <h4>Cassação</h4>
                                <span>978</span>
                            </div>
                        </div>
                    </div>
    
                    <div class="box-multas col-lg-3">
                        <div id="interior-box">
                            <div class="icone">
                                <img src="../img/Icons/info_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                            </div>
                            <div class="dados">
                                <h4>Multas</h4>
                                <span>2.971</span>
                            </div>
                        </div>
                    </div>
    
                </div>
                
                <div class="row info-l-2">
                    
                        <div class="col-9">
                            <div id="interior-box2">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                   
                     
                        <div class="col-3 c2">

                            <div id="l2-c2" class="bck-333">
                                <div id="interior-box2">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                            <div id="l2-c2" class="bck-333">
                                <div id="interior-box2">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>

                            
                        </div>
                    
                </div>
            

        </div>



        <?php
    include "footer.php";

?>






