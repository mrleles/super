<?php
echo '
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
      <title>' . $title . '</title>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.webp">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
   <body style="background: url(\'img/redback.webp\') fixed;">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div id="voltar-topo"><a href="#"><img src="img/topo.webp" alt="" /></a></div>


        <div class="header-container">
            <header class="wrapper clearfix">
                    <img src="img/logo.webp" alt="logo" width="290" id="logo-cabecalho" />
                    <div id="header-menu">
                    <a id="area-cliente" href="areacliente.php">Área do Cliente</a>
                    <nav id="menu">
                      <ul>
                        <li><a href="index.php"><img src="img/normal_1.webp" alt="" width="58" height="30" /></a><a href="planos.php"><img src="img/normal_2.webp" alt="" width="68" height="32" /></a><a href="sobre.php#titulo-cobertura"><img src="img/normal_4.webp" alt="" width="95" height="32" /></a><a href="#blog"><img src="img/normal_3.webp" alt="" width="51" height="31" /></a><a href="sobre.php"><img src="img/normal_6.webp" alt="" width="60" height="32" /></a><a href="contato.php"><img src="img/contato_normal.webp" alt="" width="77" height="30" /></a></li>

                      </ul>
                    </nav>

                    <div class="comentarios">Televendas (27) 4042-1750  <img src="img/tel.webp" width="20">   (27) 99994-1750 <img src="img/whats.webp" width="20"> </div>
                    </div>
            </header>
        </div>
'
?>
