<?php
session_start();
//verifica se há algum usuario logado
include('verifica_login.php');
include('conexao.php');
$email=$_SESSION['email'];

echo " a ".$email;
$consulta = "SELECT * FROM cliente WHERE email= '$email' ";

$con = $mysqli->query($consulta) or die ($mysqli->error);
$dado  = $con->fetch_array();
?>

<h2>Ola, <?php echo $dado["id"]; ?> </h2>

<h2><a href="logout.php">SAIR </a></h2>

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
        <div class="titulocaixa">&nbsp;Promoção do dia</div>
        <br>
        <img class="imgsobre" src="..\IMAGENS\xtudo.jpg">
        <div class="textocaixa">

            <p>X-Tudo</p>
            <p>De: R$21,50</p>
            <p>Por: R$16,00</p>
            <p>Ingrediente: Pão de hamburger, bife bovino, bacon, queijo, presunto, ovo, milho verde, batata palha e
                molho.</p>

        </div>
    </div>
    

    <div class="redessociais"> <a target="_blank" href="https://www.facebook.com/patrick.caminhasm"><img class="redesocial" src="..\IMAGENS\facebook.png"></a>
        <a target="_blank" href="https://wa.me/seunumerodetelefone?text=sua%20mensagem"><img class="redesocial" src="..\IMAGENS\whatsapp.png"></a>
    </div>
   
    <div class="footer">
        <a>Website produzido por <a target="_blank" style="color:white" href="https://www.linkedin.com/in/patrick-caminhas/">Patrick Caminhas</a>.</a><br>
        <b>© 2020 Todos os direitos reservados.</b>
    </div>
   
</body>

</html>

