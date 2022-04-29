<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="..\CSS\Estilo.css" rel="stylesheet">
        <title>Patrick Caminhas</title>
        <link rel="shortcut icon" href="..\IMAGENS\favicon.ico" />
        <meta charset="utf-8">
        <meta name="author" content="Patrick Caminhas">
        <meta name="generator" content="Brackets">
    </head>
    <body id="body">
        
       <div class="titleall"> 
             
           <div class="title"> <img class="titleimg" src="..\IMAGENS\logo3.png"> 
 <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cardapio.php">Cardapio</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Cadastrar</a></li>
                    <li><a href="contato.php">Contato</a></li>
            </ul>

        </div> </div>
        <br>
        
  


      <br>
          

 <br>
          <br><div class="contato">
          <center><div class="titulocontato">&nbsp;Login</div></center>
          <br>

          <div class="caixatextocontato" id="form">
            <form action="login1.php" method="post" name="login" class="login">
                <fieldset>
                    <label for="Email" class="labelcadastrologin">Email:</label>
                    <input name="email" id="email" class="inputcadastrologin" />
                    <label for="Password" class="labelcadastrologin">Password:</label>
                    <input name="senha" id="senha" type="password" class="inputcadastrologin" />
                    <br><br><br>
                    <input name="regbutton" type="submit" class="inputcadastrologinbutton " value="Login" />
                    <b><br>&nbsp;</b>
                </fieldset>
            </form>
        </div>
          
          </div>
          
       
          
        <br>
        


        
       
        
          <div class="redessociais">  <a target="_blank" href="https://www.facebook.com/patrick.caminhasm"><img class="redesocial" src="..\IMAGENS\facebook.png"></a>
            <a target="_blank" href="https://wa.me/seunumerodetelefone?text=sua%20mensagem"><img class="redesocial" src="..\IMAGENS\whatsapp.png"></a>
        </div>
       <!-- <div class="footerall">
            <div class="footerprin">
            <b class="textfooterp">E-mail: patrickcaminhasm@gmail.com</b><br>
            <b class="textfooterp">Telefone: +55 (33) 9 9XXX-XXX5</b>
            </div>-->
            <div class="footercontato">
                <a>Website produzido por <a target="_blank" href="https://patrick-matos.000webhostapp.com">Patrick Caminhas</a>.</a><br>
            <b>© 2020 Todos os direitos reservados.</b>
        </div><!--</div>-->
    </body>
</html>
