<?php

//variaveis para o host ou o hospedeiro, para o usuario do SGBD, senha do SGBD e o BD, usei de teste para metodo PDO
$host = "localhost";
$user = "root"; 
$password = "";
$dbname = "gerenciadorlanchonete";

//Variaveis que pegam os atributos da pagina de cadastro, as tags em '' são os nomes dos campos de texto
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$senha = MD5($_POST['senha']);

//modo de conexão com banco de dados é o mysqli, os atributos para conexão são o host, usuario, senha e BD
$connect = mysqli_connect('localhost','root',"","gerenciadorlanchonete");

//se não conectar, mata o script e exibe o erro
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

//codigo da consulta, vai pegar o email da tabela cliente aonde o email é igual o email digitado
$query_select = "SELECT email FROM cliente WHERE email = '$email'";

// consulta, vai pegar o connect com todas as variaveis pra poder conectar e o codigo da consulta
$select = mysqli_query($connect,$query_select);


$array = mysqli_fetch_array($select);

$logarray = $array['email'];

 
  //Se o email digitado é vazio ou nulo ele vai usar javascript para abrir uma caixa dizendo que o email deve ser preenchido e vai retornar para index.
  if($email == "" || $email == NULL)
  {

    echo"<script language='javascript' type='text/javascript'>alert('O campo e-mail deve ser preenchido');window.location.href='index.php';</script>";

  }
  else
  {
    //logarry recebe se tinha algum email igual ao digitado no banco de dados e compara com o email digitado, se tiver ele abre uma caixa dizendo
    if($logarray == $email)
    {

      echo"<script language='javascript' type='text/javascript'>alert('Já existe um usuario com este e-mail');window.location.href='index.php';</script>";

      die();

    }
    else
    {
      //Querry para inserção dos dados no banco de dados
    $query = "INSERT INTO cliente (email,nome,endereco,telefone,senha) VALUES ('$email','$nome','$endereco','$telefone','$senha')";

    $insert = mysqli_query($connect,$query);

    //verifica se foi inserido, se foi ele exibe caixa dizendo que foi inserido com sucesso, se não avisa que não pode cadastra-lo.
    if($insert)
    {

      echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";

    }
    else
    {

      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='index.php'</script>";

    }

  }

  }
