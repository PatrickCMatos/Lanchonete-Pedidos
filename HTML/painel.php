<?php
session_start();
include('verifica_login.php');
?>

<h2>Ola, <?php echo $_SESSION['email']; ?> </h2>

<h2><a href="logout.php">SAIR </a></h2>



