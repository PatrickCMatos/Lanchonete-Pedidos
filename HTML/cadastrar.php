<?php

$host = "localhost";
$user = "root"; 
$password = "";
$dbname = "gerenciadorlanchonete";


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$senha = MD5($_POST['senha']);

$connect = mysqli_connect('localhost','root',"","gerenciadorlanchonete");

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$query_select = "SELECT email FROM cliente WHERE email = '$email'";

$select = mysqli_query($connect,$query_select);

$array = mysqli_fetch_array($select);

$logarray = $array['email'];

 

  if($email == "" || $email == NULL){

    echo"<script language='javascript' type='text/javascript'>alert('O campo e-mail deve ser preenchido');window.location.href='index.php';</script>";

    }else{

      if($logarray == $email){

        echo"<script language='javascript' type='text/javascript'>alert('Já existe um usuario com este e-mail');window.location.href='index.php';</script>";

        die();

 

      }else{

        $query = "INSERT INTO cliente (email,nome,endereco,telefone,senha) VALUES ('$email','$nome','$endereco','$telefone','$senha')";

        $insert = mysqli_query($connect,$query);

        if($insert){

          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";

        }else{

          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";

        }

      }

    }

?>