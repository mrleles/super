<?php

$title = "Área do Cliente";

include'header.php';

echo '<div class="main-container">
          <div class="main wrapper clearfix" id="texto-sobre">
              <h1>ÁREA DO CLIENTE</h1>
              <!--
              <form>
                  <p class="p-formulario">Código <input type="text" name="codigo" id="codigo" /></p>
                  <p class="p-formulario">Senha* <input type="text" name="senha" id="senha" /></p>
                  <p class="p-formulario">* três primeiros digitos do CPF/CNPJ.</p>
                  <input class="p-formulario" type="submit" name="enviar" value="Enviar" />
              </form>
            -->
              <iframe src="http://mks.supernetes.com.br:60280/sac/login/?sys=SAC" width="100%" height="768" target="_self"></iframe>

          </div> <!-- #main -->
      </div> <!-- #main-container -->
      ';

include"footer.php";

  ?>
