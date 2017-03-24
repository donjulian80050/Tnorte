<?php
$link = mysql_connect('localhost', 'admin_tnorte', 'Adm1n7norte')
    or die('No se pudo conectar: ' . mysql_error());
/* echo 'Connected successfully'; */
mysql_select_db('productos') or die('No se pudo seleccionar la base de datos');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogos</title>
	<link rel="stylesheet" href="css/hojaestilos.css">
</head>
<?php

include("header.php");

?>
<body>
		<section>
			<?php
                  $id=$_GET['id'];
                  $sqlw = "select * from producto prod, categoria cate, imagenes imag "
                          . "where prod.cate_id= cate.cate_id and  imag.prod_id = prod.prod_id and "
                          . "prod.prod_id='$id'";
                      $result = mysql_query($sqlw);
                      while ($registro = mysql_fetch_array($result)){ ?>

                      <div id="cuadro-productos">
                      <table>
                      <tr><td rowspan="3"><img src="productos/<?php echo $registro['imagen'];?>"></td>
	                   <td><p class="PortatilImagen"><?php echo $registro['titulo'];?></p></td></tr>
                      	<tr><td><p class="descripcionPortatil"><?php echo $registro['PROD_DESCRIPCION'];?></p></td></tr>
                      	<tr><td><p class="precioPortatil"> Valor DOC $<?php echo $registro['PROD_VALOR_DOCENA'];
						?> 
						</p>
						<p class="precioPortatil">Valor PAR $<?php 
						echo $registro['V_PAR'];?>
						</p>
						</br></br><a title="Regresar" href="productos.php" id="back">Regresar</a></td></tr>
						
                      </table>
                      </div>
              <?php }?>
		</section>	
	</div>
		
			
<?php

include("footer.php");
?>
	
		
</body>
</html>