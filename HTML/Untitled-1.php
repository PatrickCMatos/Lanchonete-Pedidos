<?php
include('conexao.php');

$consulta = "SELECT * FROM cliente WHERE id = 10";

$con = $mysqli->query($consulta) or die ($mysqli->error);

?>

<html>
    <head>
        <meta charset="utf8">
    </head>
    <body>
        <table border="1"> 
            <tr>
                <td>CODIGO</td>
                <td>EMAIL</td>
                <td>NOME</td>
                <td>ENDEREÇO</td>
                <td>TELEFONE</td>
                <td>SENHA</td>
            </tr>
            <?php 
            while($dado  = $con->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["email"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["endereco"]; ?></td>
                <td><?php echo $dado["telefone"]; ?></td>
                <td><?php echo $dado["senha"]; ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </body>
</html>