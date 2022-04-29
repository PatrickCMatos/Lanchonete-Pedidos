<?php

//verifica se há uma sessão com email, se não redirecionado para a pagina inicial. Feito para não entrarem em paginas sem estarem logados.
if(!$_SESSION['email']){
    header('Location: index.php');
    exit();
}
?>