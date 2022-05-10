<?php
//pagina para conexão com o banco de dados
$host = "localhost";
$user = "root"; 
$password = "";
$dbname = "gerenciadorlanchonete";

$conexao = mysqli_connect('localhost','root',"","gerenciadorlanchonete") or die('Não foi possivel conectar');
echo "loguei";

$mysqli = new mysqli($host,$user,$password,$dbname);

?>