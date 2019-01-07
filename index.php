<?php
$title = "Supernet";

include "header.php";
$imgSlide1 = "familia.webp";
$imgSlide2 = "tv.webp";
$imgSlide3 = "capa.webp";
include "slide.php";
echo ' <div class="main-container">
            <div class="main wrapper clearfix">

                <div class="artigo">
                    <div id="div-bemvindo">
						<div class="box">
							<h1> <font color="red">B</font>em Vindos!  </h1>
						</div>
							<div class="box linha-vertical">
								<h3>Somos uma empresa bastante estruturada para trazer inovações tecnológicas em serviços de internet.</h3>
							</div>
                    </div>	<br><br>


                  <div class="vantagens">
                         <div class="tipo-planos">
                            <img src="tipo-planos/residencial.webp" alt="">
								<h3>Rádio</h3>
						  <p>Diversão, informação e entretenimento, 24h por dia. Tudo isso e muito mais em alta velocidade.<strong><br>A partir de:</strong></p>
                            <p><img src="tipo-planos/2residencial.webp" alt="" width="200"></p>
                            <p>
                              <a class="botao" href="planos.html#residencial">SAIBA MAIS</a></p>
                        </div>

                    <div class="tipo-planos">
                            <img src="tipo-planos/gamer.webp" alt="">
								<h3>Fibra - Residencial</h3>
					  <p>Transmissão de dados, voz, vídeos e imagens em alta velocidade. Porque seus downloads não podem parar.<strong><br>A partir de:</strong></p>
                            <p><img src="tipo-planos/4residencial.webp" alt="" width="200"></p>
                            <p>
                              <a class="botao" href="planos.html#gamer">SAIBA MAIS</a></p>
                        </div>

                    <div class="tipo-planos">
                            <img src="tipo-planos/empresarial.webp" alt="">
						  <h3>Fibra - Corporativa </h3>
					  <p>Conheça a banda larga que vai deixar sua empresa conectada o tempo todo com o crescimento.<strong><br>A partir de:</strong></p>
                        <p><img src="tipo-planos/10corporativo.webp" alt="" width="200"></p>
                        <p>
                          <a class="botao" href="planos.html#corporativo">SAIBA MAIS</a></p>
                      </div>

                    </div>

					<br>


                    <div class="texto-fibra">
                        <div class="slideshow-container2">
                            <div class="mySlides2 fade2">
                                <img src="img/fibra.webp" alt="">
                            </div>

                            <div class="mySlides2 fade2">
                                <img src="img/fibra2.webp" alt="">
                            </div>

                            <div class="mySlides2 fade2">
                                <img src="img/fibra3.webp" alt="">
                            </div>

                            <div class="mySlides2 fade2">
                                <img src="img/fibra4.webp" alt="">
                            </div>

                            <div class="mySlides2 fade2">
                                <img src="img/fibra5.webp" alt="">
                            </div>
                        </div>
		</div>

                    <div class="sombratxt">
					  <h2>&nbsp;</h2>
					  <h2>TESTE SUA VELOCIDADE</h2>
					  <br>
				  </div>

				<div class="testevelocidade">

        <img src="img/ballons.webp" alt="balao1">
        <!-- <img src="img/balao2.webp" alt="balao2"> -->
        <!-- <img src="img/balao3.webp" alt="balao3"> -->
        </div>
        <iframe id="testevelocidade" frameborder="0" src="http://supernetsm.speedtestcustom.com"></iframe>


              </div>

            </div> <!-- #main -->
        </div> <!-- #main-container -->';

include "footer.php";

?>
