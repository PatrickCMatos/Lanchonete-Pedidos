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
                
                <li><a href="painel.php">Painel</a></li>
                <li><a href="cardapio_logado.php">Cardapio</a></li>
                <li><a href="novo_pedido.php">Novo Pedido</a></li>
                <li><a href="contato_logado.php">Contato</a></li>
            </ul>
           
        </div>
    </div>
    <br>

   

    <br>


    <br>
    <br>
    <div class="contato">
        
            <div class="titulocontato"><center>Cadastro</center></div>
        
        <br>
        <div  id="form">
            <form action="novo_pedido_insercao.php" method="POST" name="registration" class="register">
                <fieldset>
                    <div >
                    <label for="Item1" class="labelcadastrologin">Item 1:</label> 
                    <select name="item1" id="item1" class="inputcadastrologin">
                    <option value="vazio"></option>
                        <option value="Hamburger">Hamburger</option>
                        <option value="X-Burguer">X-Burguer</option>
                        <option value="X-Bacon">X-Bacon</option>
                        <option value="X-Salada">X-Salada</option>
                        <option value="X-Frango">X-Frango</option>
                        <option value="X-Tudo">X-Tudo</option>
                        <option value="Turbinado">Turbinado</option>
                    </select>
                    <label for="quantidade1" class="labelcadastrologin">Quantidade:</label>
                    <select name="quantidade1" id="quantidade1" class="inputcadastrologin">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                  </select>
                    

                    
                    <label for="Item2" class="labelcadastrologin">Item 2:</label> 
                    <select name="item2" id="item2" class="inputcadastrologin">
                    <option value="vazio"></option>
                        <option value="Hamburger">Hamburger</option>
                        <option value="X-Burguer">X-Burguer</option>
                        <option value="X-Bacon">X-Bacon</option>
                        <option value="X-Salada">X-Salada</option>
                        <option value="X-Frango">X-Frango</option>
                        <option value="X-Tudo">X-Tudo</option>
                        <option value="Turbinado">Turbinado</option>
                  </select>
                  <label for="quantidade2" class="labelcadastrologin">Quantidade:</label>
                    <select name="quantidade2" id="quantidade2" class="inputcadastrologin">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                  </select>
                   
                    <label for="Item3" class="labelcadastrologin">Item 3:</label> 
                    <select name="item3" id="item3" class="inputcadastrologin">
                    <option value="vazio"></option>
                        <option value="Hamburger">Hamburger</option>
                        <option value="X-Burguer">X-Burguer</option>
                        <option value="X-Bacon">X-Bacon</option>
                        <option value="X-Salada">X-Salada</option>
                        <option value="X-Frango">X-Frango</option>
                        <option value="X-Tudo">X-Tudo</option>
                        <option value="Turbinado">Turbinado</option>
                  </select>
                  <label for="quantidade3" class="labelcadastrologin">Quantidade:</label>
                  <select name="quantidade3" id="quantidade3" class="inputcadastrologin">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                  </select>

                    <label for="Item4" class="labelcadastrologin">Item 4:</label> 
                    <select name="item4" id="item4" class="inputcadastrologin">
                    <option value="vazio"></option>
                        <option value="Hamburger">Hamburger</option>
                        <option value="X-Burguer">X-Burguer</option>
                        <option value="X-Bacon">X-Bacon</option>
                        <option value="X-Salada">X-Salada</option>
                        <option value="X-Frango">X-Frango</option>
                        <option value="X-Tudo">X-Tudo</option>
                        <option value="Turbinado">Turbinado</option>
                  </select>
                  <label for="quantidade4" class="labelcadastrologin">Quantidade:</label>
                  <select name="quantidade4" id="quantidade4" class="inputcadastrologin">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                  </select>


                    <label for="Item5" class="labelcadastrologin">Item 5:</label> 
                    <select name="item5" id="item5" class="inputcadastrologin">
                    <option value="vazio"></option>
                        <option value="Hamburger">Hamburger</option>
                        <option value="X-Burguer">X-Burguer</option>
                        <option value="X-Bacon">X-Bacon</option>
                        <option value="X-Salada">X-Salada</option>
                        <option value="X-Frango">X-Frango</option>
                        <option value="X-Tudo">X-Tudo</option>
                        <option value="Turbinado">Turbinado</option>
                  </select>
                  <label for="quantidade5" class="labelcadastrologin">Quantidade:</label>
                  <select name="quantidade5" id="quantidade5" class="inputcadastrologin">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                  </select>


                    <label for="Item6" class="labelcadastrologin">Item 6:</label> 
                    <select name="item6" id="item6" class="inputcadastrologin">
                        <option value="vazio"></option>
                        <option value="Hamburger">Hamburger</option>
                        <option value="X-Burguer">X-Burguer</option>
                        <option value="X-Bacon">X-Bacon</option>
                        <option value="X-Salada">X-Salada</option>
                        <option value="X-Frango">X-Frango</option>
                        <option value="X-Tudo">X-Tudo</option>
                        <option value="Turbinado">Turbinado</option>
                  </select>

                  <label for="quantidade6" class="labelcadastrologin">Quantidade:</label>
                  <select name="quantidade6" id="quantidade6" class="inputcadastrologin">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                  </select>
                    </div>


                    <label for="observacao" class="labelcadastrologin">Observações:</label> 
                    <input name="observacao"  id="observacao" type="text" placeholder="Observacoes" class="inputcadastrologin"/>
                    
                    <label for="pagamento" class="labelcadastrologin">Metodo de pagamento:</label> 
                    <select name="pagamento" id="pagamento" class="inputcadastrologin">
                        <option value="dinheiro">Dinheiro</option>
                        <option value="pix">Pix</option>
                        <option value="credito">Cartao de Credito</option>
                        <option value="debito">Cartao de Debito</option>
                    </select>
                    <input name="cadastrar" type="submit" class="botaologin" value="Cadastrar" id="cadastrar" />
                    
                </fieldset>
            </form>
        </div>

    </div>



    <br>
    <br><br><br>





    <div class="redessociais"> <a target="_blank" href="https://www.facebook.com/patrick.caminhasm"><img
                class="redesocial" src="..\IMAGENS\facebook.png"></a>
        <a target="_blank" href="https://wa.me/seunumerodetelefone?text=sua%20mensagem"><img class="redesocial"
                src="..\IMAGENS\whatsapp.png"></a>
    </div>
 
            
    <div class="footer">
        <a>Website produzido por <a target="_blank" href="https://www.linkedin.com/in/patrick-caminhas/">">Patrick
                Caminhas</a>.</a><br>
        <b>© 2020 Todos os direitos reservados.</b>
    </div>
   
</body>

</html>