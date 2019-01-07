<?php
echo '<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tests</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.webp">
        <link rel="stylesheet" href="css/main.css">
        <style>

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
                color: black;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
                height: auto;
            }
            </style>
    </head>
   <body style="background: url(\'img/redback.webp\') fixed;">


        <div id="voltar-topo"><a href="#"><img src="img/topo.webp" alt="" /></a></div>


        <div class="header-container">
            <header class="wrapper clearfix">
                    <img src="img/logo.webp" alt="logo" width="290" id="logo-cabecalho" />
                    <div id="header-menu">
                    <a id="area-cliente" href="areacliente.html">Área do Cliente</a>
                    <nav id="menu">
                      <ul>
                        <li><a href="index.html"><img src="img/normal_1.webp" alt="" width="58" height="30" /></a><a href="planos.html"><img src="img/normal_2.webp" alt="" width="68" height="32" /></a><a href="sobre.html#titulo-cobertura"><img src="img/normal_4.webp" alt="" width="95" height="32" /></a><a href="#blog"><img src="img/normal_3.webp" alt="" width="51" height="31" /></a><a href="sobre.html"><img src="img/normal_6.webp" alt="" width="60" height="32" /></a><a href="contato.html"><img src="img/contato_normal.webp" alt="" width="77" height="30" /></a></li>

                      </ul>
                    </nav>

                    <div class="comentarios">Televendas (27) 4042-1750  <img src="img/tel.webp" width="20">   (27) 99994-1750 <img src="img/whats.webp" width="20"> </div>
                    </div>
            </header>
        </div>




        <div class="main-container">
            <div class="main wrapper clearfix" id="texto-sobre">
                <h1>Tests</h1>

                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, \'nbr\')">NBR</button>
                  <button class="tablinks" onclick="openCity(event, \'cancao\')">Canção Nova</button>
                  <button class="tablinks" onclick="openCity(event, \'rit\')">RIT</button>
                  <button class="tablinks" onclick="openCity(event, \'minas\')">Rede Minas</button>
                  <button class="tablinks" onclick="openCity(event, \'redevida\')">Rede Vida</button>
                  <button class="tablinks" onclick="openCity(event, \'gazeta\')">TV Gazeta</button>
                  <button class="tablinks" onclick="openCity(event, \'camara\')">TV Câmara</button>
                  <button class="tablinks" onclick="openCity(event, \'tvebahia\')">TVE Bahia</button>
                  <button class="tablinks" onclick="openCity(event, \'aparecida\')">TV Aparecida</button>
                  <button class="tablinks" onclick="openCity(event, \'sesc\')">SESC TV</button>
                  <button class="tablinks" onclick="openCity(event, \'acritica\')">TV A Crítica</button>
                  <button class="tablinks" onclick="openCity(event, \'ngt\')">REDE NGT</button>
                  <button class="tablinks" onclick="openCity(event, \'familia\')">Rede Família</button>
                </div>

                <div id="nbr" class="tabcontent">
                  <h3>NBR</h3>
                  <iframe src="http://nbr.gov.br/streaming/nbr-include" width="500" height="290"></iframe>
                </div>

                <div id="cancao" class="tabcontent">
                  <h3>Canção Nova</h3>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/5tlF3c2-tzk?rel=0" allowfullscreen></iframe>
                </div>

                <div id="rit" class="tabcontent">
                  <h3>RIT</h3>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/rhWYShKMV1U?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <div id="minas" class="tabcontent">
                  <h3>Rede Minas</h3>
                  <iframe width="560" height="315" src="https://fast.player.liquidplatform.com/pApiv2/embed/13cd624949054179d0b60c84523d23b1/live/ec4b5a296d97fa99bf990662f5b4f8e1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <div id="redevida" class="tabcontent">
                  <h3>Rede Vida</h3>
                  <object type="application/x-shockwave-flash" data="https://www.padrereginaldomanzotti.org.br/wp-content/themes/padre/player.swf" width="560" height="315" bgcolor="#000000" id="mediaspace" name="mediaspace" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=https%3A%2F%2Fwww.padrereginaldomanzotti.org.br%2Frec%2Ftv-evangelizar%2F&amp;id=mediaspace&amp;name=mediaspace&amp;file=tv&amp;bufferlength=3&amp;streamer=rtmp%3A%2F%2Ftvevangelizar20.crossdigital.com.br%2Fevangelizar&amp;autostart=true&amp;abouttext=CrossHost.com.br&amp;aboutlink=http%3A%2F%2Fwww.crossHost.com.br&amp;controlbar.position=over&amp;logo.hide=false&amp;logo.position=top-right&amp;logo.link=http%3A%2F%2Fcrosshost.com.br"></object>
                </div>
                <div id="gazeta" class="tabcontent">
                    <h3>TV Gazeta</h3>
                    <iframe src="https://livestream.com/accounts/5381476/events/2395418/player" width="560" height="315"></iframe>
                </div>

                <div id="camara" class="tabcontent">
                    <h3>TV Câmara</h3>
                    <object id="GrindPlayer" name="GrindPlayer" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="560" height="315" type="application/x-shockwave-flash" data="http://www2.camara.leg.br/SampleMediaPlayback.swf"><param name="FlashVars" value="src=http://stream2.camara.gov.br:8134/tv1/manifest.m3u8&amp;streamType=live&amp;poster=http://www.camara.leg.br/internet/tvcamara/conteudo/img/tvcamara_poster.webp&amp;endOfVideoOverlay=&amp;backgroundColor=0xFFFFFF&amp;scaleMode=stretch&amp;plugin_hls=http://www2.camara.leg.br/flashlsOSMF.swf&amp;hls_minbufferlength=-1&amp;hls_maxbufferlength=30&amp;hls_lowbufferlength=3&amp;hls_seekmode=KEYFRAME&amp;hls_startfromlevel=-1&amp;hls_seekfromlevel=-1&amp;hls_live_flushurlcache=false&amp;hls_info=true&amp;hls_debug=false&amp;hls_debug2=false&amp;hls_warn=true&amp;hls_error=true&amp;hls_fragmentloadmaxretry=-1&amp;hls_manifestloadmaxretry=-1&amp;hls_capleveltostage=false&amp;hls_maxlevelcappingmode=downscale"><param name="movie" value="http://www2.camara.leg.br/SampleMediaPlayback.swf"><param name="src" value="http://www2.camara.leg.br/SampleMediaPlayback.swf"><param name="wmode" value="direct"><param name="allowfullScreen" value="true"><param name="bgcolor" value="000000"><param name="allowscriptaccess" value="always"><param name="wmode" value="transparent"><embed src="http://www2.camara.leg.br/SampleMediaPlayback.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="auto" flashvars="src=http://stream2.camara.gov.br:8134/tv1/manifest.m3u8&amp;streamType=live&amp;poster=http://www.camara.leg.br/internet/tvcamara/conteudo/img/tvcamara_poster.webp&amp;endOfVideoOverlay=&amp;backgroundColor=0xFFFFFF&amp;scaleMode=stretch&amp;plugin_hls=http://www2.camara.leg.br/flashlsOSMF.swf&amp;hls_minbufferlength=-1&amp;hls_maxbufferlength=30&amp;hls_lowbufferlength=3&amp;hls_seekmode=KEYFRAME&amp;hls_startfromlevel=-1&amp;hls_seekfromlevel=-1&amp;hls_live_flushurlcache=false&amp;hls_info=true&amp;hls_debug=false&amp;hls_debug2=false&amp;hls_warn=true&amp;hls_error=true&amp;hls_fragmentloadmaxretry=-1&amp;hls_manifestloadmaxretry=-1&amp;hls_capleveltostage=false&amp;hls_maxlevelcappingmode=downscale"></object>
                </div>

                <div id="tvebahia" class="tabcontent">
                    <h3>TVE Bahia</h3>
                    <iframe src="http://www.irdeb.ba.gov.br/_utils/streaming/hls/index.php" width="700" height="400"></iframe>
                </div>

                <div id="aparecida" class="tabcontent">
                    <h3>TV Aparecida</h3>
                    <iframe src="http://caikron.live/player/a12/tv/index.html" width="700" height="400"></iframe>
                </div>

                <div id="sesc" class="tabcontent">
                    <h3>SESC TV</h3>
                    <iframe src="https://livestream.com/accounts/16991778/events/6670101/player" width="700" height="400"></iframe>
                </div>
                <div id="acritica" class="tabcontent">
                    <h3>TV A Crítica</h3>
                <iframe allowfullscreen msallowfullscreen webkitallowfullscreen mozallowfullscreen width="640" height="360" src="https://fast.player.liquidplatform.com/pApiv2/embed/fdde73a2a3716c6c64504f72d06354fc/live/679f501d2054fc8514ea1fc28fe5f167?autoStart=true"></iframe>
                </div>

                <div id="ngt" class="tabcontent">
                    <h3>REDE NGT</h3>
                    <iframe src="https://www.redengt.com.br/stream" width="700" height="400" allowfullscreen></iframe>
                </div>

                <div id="familia" class="tabcontent">
                    <h3>Rede Família</h3>
                    <iframe src="http://zoevideos.net/player/aovivo/374" width="645" height="370" allowfullscreen></iframe>
                </div>

                <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
                </script>

            </div> <!-- #main -->
        </div> <!-- #main-container -->';

include "footer.php";

?>
