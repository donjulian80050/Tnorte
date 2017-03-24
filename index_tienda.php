<?php
	require('conexion_tienda.php');
	
	$query="SELECT *  FROM productos";

	$resultado=$mysqli->query($query);
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogos</title>
	<link rel="stylesheet" href="css/hojaestilos.css">
</head>
<body>
		<section>

			<?php while($row=$resultado->fetch_assoc()){ ?>

			<a href="productos_tienda.php?id=<?php echo $row['ID_PRODUCTO'];?>">
			<div id="cuadro-slider" class="catalogo">
				<img src="productos_tienda/<?php echo $row['imagen'];?>" width="100%">
				<div class="descripcion">
					<p class="tituloImagen"><?php echo $row['titulo'];?></p>
					<p class="precioImagen"> $<?php echo $row['V_DOC'];
					echo $row['V_PAR']?></p>					
				</div>			
			</div>
			</a>
			<?php } ?>
		</section>
</body>
</html>