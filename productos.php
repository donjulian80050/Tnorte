<!--ENLACE PARA CONECTAR LA TIENDA PHP-->
<?php

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'admin_tnorte', 'Adm1n7norte')
    or die('No se pudo conectar: ' . mysql_error());
/* echo 'Connected successfully'; */
mysql_select_db('tacones_norte') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM altura_tacon';
$resultado = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

$precioproducto = 'select * from productos pp, categoria cat, tabla_imagenes img where pp.id_categoria= cat.id_categoria and  img.ID_PRODUCTO = pp.id_producto';
$pxpreslt = mysql_query($precioproducto) or die('Consulta fallida: ' . mysql_error());	
?>
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
<body onLoad="alert('Productos y precios no están aún actualizados, la pagína está en construcción')">
<?php
include("header.php");
?>

<div id="back"></div>
    
<h2>Catálago</h2>		
<p>Puedes acceder a nuestro catálago de productos poe medio de esta sección.</p>
<p>Elige una de las categorías y al ingresar podrar seleccionar con más detalle el 
    producto que quieres y consultar el precio por docena y por par. Ten en cuenta que la comprá mínima permitida por este medio
es de una docena.</p>
<hr>
<div class="prod">
    <center>
        <table>
                <tr>
                        <td><a><center>Tacones Para Forrar</center></a></td>
                        <td><a><center>Tacones Para Pintar</center></a></td>
                        <td><a><center>Tacones Odena</center></a></td>
                            <td><a><center>Otros Productos</center></a></td>
                </tr>
                     
                <tr>        
                        <td><a href="productos-forrar.php"><img src="images/prod_forrar.jpg" alt="Forrar"/></a></td>
                        <td><a href="productos-pintar.php"><img src="images/prod_pintar.jpg" alt="Pintar"/></a></td>
                        <td><a href="productos-odena.php"><img src="images//prod_odena.jpg" alt="Odena"/></a></td>
                        <td><a href="productos-varios.php"><img src="images//prod_varios.jpg" alt="Varios"/></a></td>
                </tr>
        </table>
    </center> 
    <hr>
    <div class="alert">
        <p><strong>IMPORTANTE:</strong> Está sección aún esta en construcción, los precios y productos que acá aparecen no están actualizados, agradecemos tu compresión,
    en poco tiempo lo tendremos al día.</p>
    </div>
    <hr>
</div>
</div>
	




<?php

include("footer.php");
?>
</body>
   
</html>