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
        <!--<div class="titlep">&nbsp;&nbsp;&nbsp;&nbsp;<img class="titleimgp" src="..\IMAGENS\126341.png">&nbsp; <b>+55 (33) 9 9XXX-XXX5</b></div>
-->
        <div class="title"> <img class="titleimg" src="..\IMAGENS\logo3.png">
            <ul>
                
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cardapio.php">Cardapio</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="cadastro.php">Cadastrar</a></li>
                    <li><a href="contato.php">Contato</a></li>
            </ul>
            <!--<nav  class="menu" >
 <ul>
                    <li><a href="..\html\inicio.php">Inicio</a></li>
                    <li><a href="..\html\nosso_trabalho.php" target="_blank">Nosso trabalho</a></li>
                    <li><a href="#quemsomosnos">Quem somos</a></li>
                </ul>
            </nav> -->
        </div>
    </div>
    <br>

    <!-- <ul class="slider">
        <li>
            <input type="radio" id="slide1" name="slide" checked>
            <label for="slide1"></label>
            <img href="..\html\inicio.php" src="..\IMAGENS\imagem11.png" />
        </li>
        <li>
            <input type="radio" id="slide2" name="slide" checked>
            <label for="slide2"></label>            
            <img href="..\html\inicio.php" src="..\IMAGENS\imagem12.png" />
        </li>
        <li>
            <input type="radio" id="slide3" name="slide" checked>
            <label for="slide3"></label>            
            <img href="..\html\inicio.php" src="..\IMAGENS\imagem13.png" />
        </li>
 </ul> -->


    <br>
    <!--  <img class="imgprincipal" src="..\IMAGENS\imagem14.png">
-->

    <br>
    <br>
    <div class="contato">
        
            <div class="titulocontato"><center>Cadastro</center></div>
        
        <br>
        <div class="caixatextocontato" id="form">
            <form action="cadastrar.php" method="POST" name="registration" class="register">
                <fieldset>
                    <label for="Nome" class="labelcadastrologin">Nome:</label>
                    <input name="nome" id="nome" type="text" placeholder="Seu nome" class="inputcadastrologin" />
                    <label for="Email" class="labelcadastrologin">E-mail:</label> 
                    <input name="email"  id="email" type="text" placeholder="Seu email" class="inputcadastrologin"/>
                    <label for="Celular" class="labelcadastrologin">Celular:</label>
                    <input name="telefone" id="telefone" type="text" placeholder="Seu celular" class="inputcadastrologin"/>
                    <label for="Endereco" class="labelcadastrologin">Endereço:</label>
                    <input name="endereco" id="endereco" type="text" placeholder="Seu endereço" class="inputcadastrologin"/>
                    <label for="Senha" class="labelcadastrologin">Senha:</label>
                    <input name="senha" id="senha" type="password" class="inputcadastrologin" />
                    <br><br><br><br><br><br><br>
                    <input name="cadastrar" type="submit" class="inputcadastrologinbutton" value="cadastrar" id="cadastrar" />
                </fieldset>
            </form>
        </div>

    </div>



    <br>






    <div class="redessociais"> <a target="_blank" href="https://www.facebook.com/patrick.caminhasm"><img
                class="redesocial" src="..\IMAGENS\facebook.png"></a>
        <a target="_blank" href="https://wa.me/seunumerodetelefone?text=sua%20mensagem"><img class="redesocial"
                src="..\IMAGENS\whatsapp.png"></a>
    </div>
    <!-- <div class="footerall">
            <div class="footerprin">
            <b class="textfooterp">E-mail: patrickcaminhasm@gmail.com</b><br>
            <b class="textfooterp">Telefone: +55 (33) 9 9XXX-XXX5</b>
            </div>-->
    <div class="footercontato">
        <a>Website produzido por <a target="_blank" href="https://patrick-matos.000webhostapp.com">Patrick
                Caminhas</a>.</a><br>
        <b>© 2020 Todos os direitos reservados.</b>
    </div>
    <!--</div>-->
</body>

</html>