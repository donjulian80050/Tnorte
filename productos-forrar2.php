<!doctype html>

<html lang="es">

<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <title> Tacones Norte - productos</title>
  <link rel="stylesheet" href="css/estilo_tnorte.css">
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/perzonalizacion.js"></script>
  <link rel="shortcut icon" href="imagenes/logo.jpg" type="image/x-icon">﻿
  <script src="js/modernizr.js"></script>
<!--ENLACE PARA LOS ESTILOS DE LA TIENDA PHP-->   
  <link rel="stylesheet" href="css/hojaestilos.css">
  
 </head>
<body onLoad=>
<?php
include("header.php");
?>

<div id="back"></div>
    
<h2>Seleccione producto</h2>		
<p>Seleccione el tipo de producto que desea</p>
<hr>
<div class="prod">
    <center>
        <table>
                <tr>
                        <td><a><center>Playa</center></a></td>
                        <td><a><center>Suecos/Plataforma</center></a></td>
                        
                </tr>
                     
                <tr>        
                        <td><a href="productos-forrar.php"><img src="images/prod_forrar.jpg" alt="Forrar"/></a></td>
                        <td><a href="productos-suecos.php"><img src="images/suecos.jpg" alt="Pintar"/></a></td>
                </tr>
        </table>
    </center> 
    <hr>
    <div class="alert">
        /*<p><strong>IMPORTANTE:</strong> Está sección aún esta en construcción, los precios y productos que acá aparecen no están actualizados, agradecemos tu compresión,
    en poco tiempo lo tendremos al día.</p>*/
    </div>
    <hr>
</div>
</div>
	




<?php

include("footer.php");
?>
</body>
   
</html>