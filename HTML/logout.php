<?php
session_start();
session_destroy();
//destroi a sessão
header('Location: index.php');
exit();
?>