<!--ENLACE PARA CONECTAR LA TIENDA PHP-->
<?php

// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'admin_tnorte', 'Adm1n7norte')
    or die('No se pudo conectar: ' . mysql_error());
/* echo 'Connected successfully'; */
mysql_select_db('tnorte') or die('No se pudo seleccionar la base de datos');

// Realizar una consulta MySQL
$query = 'SELECT * FROM altura_tacon';
$resultado = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

$precioproducto = 'select * from productos prod, categoria cate, imagenes imag, material mate where prod.cate_id= cate.cate_id'. 
        ' and  imag.prod_id = prod.prod_id and prod.mate_id= mate.mate_id and mate.mate_id= 2';
$pxpreslt = mysql_query($precioproducto) or die('Consulta fallida: ' . mysql_error());	
?>
<!doctype html>

<html lang="es">

<head>  
  <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <title> Tacones Norte - productos-forrar</title>
 
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="imagenes/logo.jpg" type="image/x-icon">
  ﻿
  <script type="text/javascript" src="js/perzonalizacion.js"></script>
  
  <script src="js/modernizr.js"></script>
<!--ENLACE PARA LOS ESTILOS DE LA TIENDA PHP-->   
  
  
 </head>
<body onload="mueveReloj()" onload="mensajes()">
<?php
include("header.php");
?>

<h2>Tacones Para forrar</h2>

<section>
	<?php 
		while ($fila = mysql_fetch_array($pxpreslt, MYSQL_ASSOC)) {
			?>			
				<a href="productos_tienda.php?id=<?php echo $fila['PROD_ID'];?>">	
					<div id="cuadro-slider" class="catalogo">
					<img src="productos/<?php echo $fila['imagen'];?>" width="100%">
						<div class="descripcion">
						<p class="tituloImagen"><?php echo $fila['titulo'];?></p>
						<p class="precioImagen"> DOC: $<?php echo $fila['prod_valor_docena'];?></p>		
						</div>			
					</div>
				</a>
	<?php } ?>
</section>	
<hr>
    <div class="alert">
        <p><strong>IMPORTANTE:</strong> Está sección aún esta en construcción, los precios y productos que aáa aparecen no están actualizados, agradecemos tu compresión,
    en poco tiempo lo tendremos actualizado.</p>
    </div>
    <hr>
<?php

include("footer.php");
?>
</body>
   
</html>