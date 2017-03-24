<!--ENLACE PARA CONECTAR LA TIENDA PHP-->
<?php

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'tnorte_admin', 'hyiuohi80u9-0UI#*')
    or die('No se pudo conectar: ' . mysql_error());
/* echo 'Connected successfully'; */
mysql_select_db('productos') or die('No se pudo seleccionar la base de datos');

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
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/estiloh.css">
    <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/modernizr-custom.js"></script>
  <script type="text/javascript" src="js/perzonalizacion.js"></script>
  <link rel="shortcut icon" href="imagenes/logo.jpg" type="image/x-icon">﻿
  <script src="js/modernizr.js"></script>
<!--ENLACE PARA LOS ESTILOS DE LA TIENDA PHP-->   
  <link rel="stylesheet" href="css/hojaestilos.css">
  
 </head>
<body onload="mueveReloj()" onload="mensajes()">
<?php
include("header.php");
?>


	<section>

	
	<?php 
	while ($fila = mysql_fetch_array($pxpreslt, MYSQL_ASSOC)) {
	?>			
			<a href="productos_tienda.php?id=<?php echo $fila['ID_PRODUCTO'];?>">	
				<div id="cuadro-slider" class="catalogo">
					<img src="productos/<?php echo $fila['imagen'];?>" width="100%">
					<div class="descripcion">
						<p class="tituloImagen"><?php echo $fila['titulo'];?></p>
						<p class="precioImagen"> DOC: $<?php echo $fila['V_DOC'];?></p>					
					</div>			
				</div>
			</a>
	<?php } ?>
    </section>	
</div>

<?php

include("footer.php");
?>
</body>
   
</html>