<?php
session_start();
//verifica se há algum usuario logado
include('verifica_login.php');
include('conexao.php');
$email=$_SESSION['email'];

echo " a ".$email;
$consulta = "SELECT * FROM cliente WHERE email= '$email' ";
$consultapedidos = "SELECT * FROM pedido WHERE email= '$email' ";

$con = $mysqli->query($consulta) or die ($mysqli->error);
$conped = $mysqli->query($consultapedidos) or die ($mysqli->error);

$dado  = $con->fetch_array();

?>


<!DOCTYPE html>
<html>

<head>
    <link href="..\CSS\Estilo.css" rel="stylesheet">
    <title>Patrick Caminhas</title>
    <link rel="shortcut icon" href="..\IMAGENS\favicon.ico" />
    <meta charset="utf-8">
    <meta name="author" content="Patrick Caminhas">
    <meta name="generator" content="Brackets">
</head>

<body id="body">

    <div class="titleall">
    

        <div class="title"> <a href="index.php"> <img class="titleimg" src="..\IMAGENS\logo3.png"> </a>
            <ul>
                <li><a href="painel.php">Painel</a></li>
                <li><a href="cardapio_logado.php">Cardapio</a></li>
                <li><a href="novo_pedido.php">Novo Pedido</a></li>
                <li><a href="contato_logado.php">Contato</a></li>
            </ul>
      
        </div>
    </div>
    <br>

  

    <br> <br> <br> <br>
    <br>

    
    <div class="caixasobre">
    <h2>Ola, <?php echo $dado["nome"]; ?> </h2>

<h2><a href="logout.php">SAIR </a></h2>
        <div class="titulocaixa">&nbsp;Seus Pedidos</div>
        <br>
        <div class="textocaixa">

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
            while($dadoped  = $conped->fetch_array()) {
            ?>
            <tr>
                <td><?php echo $dadoped["data"]; ?></td>
                <td><?php echo $dadoped["hora"]; ?></td>
                <td><?php echo $dadoped["itens"]; ?></td>
                <td><?php echo $dadoped["total"]; ?></td>
                <td><?php echo $dadoped["observacao"]; ?></td>
                <td><?php echo $dadoped["endereco"]; ?></td>
                <td><?php echo $dadoped["metodo_pagamento"]; ?></td>
            </tr>
            <?php 
            }
            ?>
        </table>

        </div>
    </div>
    

    <div class="redessociais"> <a target="_blank" href="https://www.facebook.com/patrick.caminhasm"><img class="redesocial" src="..\IMAGENS\facebook.png"></a>
        <a target="_blank" href="https://wa.me/seunumerodetelefone?text=sua%20mensagem"><img class="redesocial" src="..\IMAGENS\whatsapp.png"></a>
    </div>
   
    <div class="footercontato">
        <a>Website produzido por <a target="_blank" style="color:white" href="https://www.linkedin.com/in/patrick-caminhas/">Patrick Caminhas</a>.</a><br>
        <b>© 2020 Todos os direitos reservados.</b>
    </div>
   
</body>

</html>

