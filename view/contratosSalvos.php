<?php

?>

<div class="table" id="listaContratos">
    <br><br>
    <table>
    <thead>
        <th scope="col">Contrato</th>
        <th scope="col">Contratante</th>
        <th scope="col">valorContrato</th>
        <th scope="col">vendedor</th>
        <th scope="col">Data do cadastro</th>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['contrato']."</td>";
                echo "<td>".$user_data['contratante']."</td>";
                echo "<td>".$user_data['valorContrato']."</td>";
                echo "<td>".$user_data['vendedor']."</td>";
                echo "<td>".$user_data['agora']."</td>";
        
            }

        ?>
    </tbody>
    </table>
</div>