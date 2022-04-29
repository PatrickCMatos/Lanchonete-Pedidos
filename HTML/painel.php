<?php
session_start();
//verifica se há algum usuario logado
include('verifica_login.php');
?>

<h2>Ola, <?php echo $_SESSION['email']; ?> </h2>

<h2><a href="logout.php">SAIR </a></h2>



