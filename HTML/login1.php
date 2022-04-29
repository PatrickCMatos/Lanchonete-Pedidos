<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: index.php');
    exit();
}
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select id, email from cliente where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: painel.php');
    exit();
}else {
    $_SESSION['nao_autenticado'] = true;
    echo "<script language='javascript' type='text/javascript'>alert('ERRO: Usuario ou senha invalidos!');window.location.href='login.php';</script>";
    die();
    header('Location: login.php');
   
    exit();

}

?>