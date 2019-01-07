<?php
$title = "Contato";

include "header.php";
$imgSlide1 = "sicoob.webp";
$imgSlide2 = "ouvidoria.webp";
$imgSlide3 = "fiber.webp";
include "slide.php";
echo '<div class="main wrapper clearfix" id="texto-sobre">
                <h1>Contato</h1>
                <div class="endereco" id="div-endereco">
                    <div class="sombratxt">

                        <strong>Endereço:</strong>
                          <ul>
                            <li>São Mateus - Praça São Benedito, 180 - Centro</li>
                            <li>Guriri - Av. Othovarino Duarte Santos - norte, 388<br>(Em frente à Dito\'s Lanche)</li>
                          </ul>
                            <a class="botao" href="enderecos.html">OUTRAS CIDADES? CLIQUE AQUI!</a>
                        <br>
                        <strong>Telefone/Suporte:</strong>
                            <br>São Mateus/Guriri - (27) 4042-1750 ou (27)99776-1727
                        <br><br>
                        <strong>Whatsapp:</strong>
                            <br>(27) 99994-1750 SAC
                            <br>(27) 99644-6381 Financeiro
                        <br><br>
                        <strong>Email:</strong>
                            <br>ouvidoria@supernetes.com.br
                            <br>atendimentosaomateus@supernetes.com.br
                            <br>vendassaomateus@supernetes.com.br
                            <br>vendasguriri@supernetes.com.br
                            <br>financeirosaomateus@supernetes.com.br
                            <br><br>
                        Tire suas dúvidas antes aqui antes de ligar!
                        <a class="botao" href="duvidas.html">DÚVIDAS</a>
                    </div>
                </div>
			<div class="contato">
			<br>
                            <form name="formulario" action="contato.php" method="post">

                                <p><b>Nome:</b><br>
                                    <input type=text name="nome" class="estilo_input2"></p>
                                <p><b>Email:</b><br>
                                        <input type=text name="email" class="estilo_input2"></p>
                                <p><b>Assunto:</b><br>
                                        <input type=text name="assunto" class="estilo_input2"></p>
                                <p><b>Mensagem:</b><br>
                                        <textarea name="mensagem" rows="10" ></textarea></p>
                                <p><input type="submit" value="Enviar Email" class="estilo_input">
                                   <input type="reset" value="Limpar Formulário" class="estilo_input"></p>
                            </form>
			</div>
			<br>

                        <!--
                        <div id="div-mapas">
                        <img src="img/mapasm.webp" alt="mapasm" id="mapasm" class="mapa"/>
                        <img src="img/mapaguriri.webp" alt="mapaguriri"  id="mapaguriri" class="mapa" />
                        </div>
                        -->

                        <div style="width: 100%; overflow: auto; padding: 100px 0;">
                            <div class="tab">
                                <button class="tablinks" onclick="openPlace(event,\'sm\')" id="mapsm">São Mateus</button>
                                <button class="tablinks" onclick="openPlace(event,\'guriri\')">Guriri</button>
                            </div>
                            <div id="sm" class="tabcontent">
                                <h3>São Mateus</h3>
                            </div>
                            <div id="guriri" class="tabcontent">
                                <h3>Guriri</h3>
                            </div>


                        </div>



                        <!-- the modal -->
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                        </div>

                        <script>function myMap(){
                            var mapCanvas = document.getElementById("sm");
                            var uluru = {lat: -18.7143379, lng: -39.8543285};
                            var mapOptions = { center: uluru, zoom: 19};
                            var map = new google.maps.Map(mapCanvas, mapOptions);
                            }
                            var marker = new goggle.maps.Marker({position: uluru, map: map});
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH714AIj7H74DmFYs2ZO7tVFv5wswuDLk&callback=myMap"></script>
            </div> <!-- #main -->';

include "footer.php";

?>
