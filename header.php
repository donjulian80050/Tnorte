<html lang="es">
<head>  
  <meta name="viewport" charset="utf-8" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, 
        minimum-scale=1.0">
  <title> Tacones Norte </title>
  <!--Flexsliders-->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/estilo_tnorte.css"/>
  <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
  <link rel="shortcut icon" href="imagenes/logo_oficial.jpg" type="image/x-icon"/>﻿
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/froogaloop.js"></script> 
  <script src="js/jquery.easing.js"></script> 
  <script src="js/jquery.fitvid.js"></script> 
  <script src="js/jquery.mousewheel.js"></script> 
  <script src="js/modernizr.js"></script> 
  <script src="js/shBrushCss.js"></script> 
  <script src="js/shBrushJScript.js"></script> 
  <script src="js/shBrushXml.js"></script> 
  <script src="js/shCore.js"></script> 
  <script src="js/modernizr.js"></script> 

  <script type="text/javascript" src="js/perzonalizacion.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>

<script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider();
    });
  </script>
  
</head>

<body onload="mueveReloj()" onload="mensajes()">
    <header class="header2">
	<div class="wrapper">
                
            <div class="logo"><img src="imagenes/tnorte_logo.png" 
             alt="tacones Norte" href="index.php">
            </div>
            <nav>
                <a href="indexlogin.php">Usuarios</a>
                <a href="productos.php">Productos</a>
                <a href="contacto.php">Contáctenos</a>
                <a href="historia.php">Nosotros</a>
                <a href="index.php">Inicio</a>
            </nav>
           
            <div class="hora"></div>
            <div class="reloj">
			<form name="form_reloj">
			<input type="text" name="reloj" size="13" 
                               style="
                               background-color : #574B4B; 
                               color : #FFFFFF; 
                               font-family : cursive; 
                               font-size : 10pt; 
                               text-align : center;
                               margin-top: 20px;"  
                               onfocus="window.document.form_reloj.reloj.blur()"> 
			</form>
            </div>
        </div>
    </header>  
