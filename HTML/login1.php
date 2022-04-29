<?php
//inicia a sessão
session_start();
//faz a conexão com o SGBD e BD
include('conexao.php');
//Se o email digitado ou a senha digitada forem vazios então irá pagina index e fechará o resto do script.
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: index.php');
    exit();
}
//variaveis que recebem o email e senha
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
//query para receber o id e email aonde email e senha no BD forem iguais aos que foram digitados
$query = "select id, email from cliente where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
//Coloca o resultado da querry anterior em uma variavel linha(row)
$row = mysqli_num_rows($result);
//Se houver uma linha então inicia a sessão com a linha
if($row == 1){
    //vai para a pagina painel com a variavel do email
    $_SESSION['email'] = $email;
    header('Location: painel.php');
    exit();
}else {
    //Usuarios invalidos e volta para pagina de login
    $_SESSION['nao_autenticado'] = true;
    echo "<script language='javascript' type='text/javascript'>alert('ERRO: Usuario ou senha invalidos!');window.location.href='login.php';</script>";
    die();
    header('Location: login.php');
   
    exit();

}

?>