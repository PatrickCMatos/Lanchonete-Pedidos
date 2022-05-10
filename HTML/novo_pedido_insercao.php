<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
include('verifica_login.php');
include('conexao.php');
$emaillogin=$_SESSION['email'];
$consulta = "SELECT * FROM cliente WHERE email= '$emaillogin' ";
$con = $mysqli->query($consulta) or die ($mysqli->error);
$dado  = $con->fetch_array();

//variaveis para o host ou o hospedeiro, para o usuario do SGBD, senha do SGBD e o BD, usei de teste para metodo PDO
$host = "localhost";
$user = "root"; 
$password = "";
$dbname = "gerenciadorlanchonete";

//Variaveis que pegam os atributos da pagina de cadastro, as tags em '' são os nomes dos campos de texto
$email = $dado["email"];
$endereco = $dado["endereco"];
$observacao = $_POST['observacao'];
$pagamento = $_POST['pagamento'];
$data=date("d/m/Y");
$hora=date("H:i:s");
$itens="| ";
$total = 0;
$itemname;
$itemquantity;
for( $i=1; $i<=6; $i++){
  $itemname="item$i";
  $itemquantity="quantidade$i";
  if($_POST[$itemname]!='vazio'){
    if($_POST[$itemname]=='Hamburger'){
      $total+=10*$_POST[$itemquantity];
    }
    if($_POST[$itemname]=='X-Burger'){
      $total+=13*$_POST[$itemquantity];
    }
    if($_POST[$itemname]=='X-Bacon'){
      $total+=16*$_POST[$itemquantity];
    }
    if($_POST[$itemname]=='X-Salada'){
      $total+=15*$_POST[$itemquantity];
    }
    if($_POST[$itemname]=='X-Frango'){
      $total+=14*$_POST[$itemquantity];
    }
    if($_POST[$itemname]=='X-Tudo'){
      $total+=20*$_POST[$itemquantity];
    }
    if($_POST[$itemname]=='Turbinado'){
      $total+=24*$_POST[$itemquantity];
    }
    $itens.="$_POST[$itemquantity]x ". $_POST[$itemname]." | ";
  }
}

//modo de conexão com banco de dados é o mysqli, os atributos para conexão são o host, usuario, senha e BD
$connect = mysqli_connect('localhost','root',"","gerenciadorlanchonete");

//se não conectar, mata o script e exibe o erro
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
    
}

echo "Connected successfully";

echo " -  $email - $endereco - $itens - $total - $observacao - $pagamento - $data - $hora";
      //Querry para inserção dos dados no banco de dados
    $query = "INSERT INTO pedido (email,endereco,itens,total,observacao,metodo_pagamento,data,hora) VALUES ('$email','$endereco','$itens','$total','$observacao','$pagamento','$data','$hora')";

    $insert = mysqli_query($connect,$query);
  
    //verifica se foi inserido, se foi ele exibe caixa dizendo que foi inserido com sucesso, se não avisa que não pode cadastra-lo.
    if($insert)
    {

      echo"<script language='javascript' type='text/javascript'>alert('Pedido cadastrado com sucesso!');window.location.href='painel.php'</script>";
  }
