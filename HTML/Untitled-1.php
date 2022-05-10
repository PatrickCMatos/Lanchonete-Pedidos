<?php
include('conexao.php');

$consulta = "SELECT * FROM pedido WHERE email = 'patrickcamatos@gmail.com'";

$con = $mysqli->query($consulta) or die ($mysqli->error);

?>

<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
    <table border="1"> 
            <tr>
                <td>DATA</td>
                <td>HORA</td>
                <td>ITENS</td>
                <td>TOTAL</td>
                <td>OBSERVAÇÃO</td>
                <td>ENDEREÇO</td>
                <td>METODO DE PAGAMENTO</td>
            </tr>
            <?php 
            while($dado  = $con->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $dado["data"]; ?></td>
                <td><?php echo $dado["hora"]; ?></td>
                <td><?php echo $dado["itens"]; ?></td>
                <td><?php echo $dado["total"]; ?></td>
                <td><?php echo $dado["observacao"]; ?></td>
                <td><?php echo $dado["endereco"]; ?></td>
                <td><?php echo $dado["metodo_pagamento"]; ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
        
    </body>
</html>