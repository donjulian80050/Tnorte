<!--ENLACE PARA CONECTAR al menu-productos PHP-->
<?php
$bd_host = "localhost"; //localhost[/font][/size]
//[size=4][font=arial,helvetica,sans-serif]
$bd_usuario = "tnorte";
$bd_password = "7Nor73123";
$bd_base = "tacones_norte";
$con = mysql_connect($bd_host, $bd_usuario, $bd_password);
mysql_select_db($bd_base, $con);
?>
<!doctype html>

<html lang="es">

<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  <title> Tacones Norte - productos</title>
    <link rel="stylesheet" href="css/menu_productos.css">
 </head>
<body onload="mueveReloj()" onload="mensajes()">
<?php
include("header.php");
?>

<div id="menu">
		<?php
		include("tacones_norte.php");
		$precioxproducto_sql = mysql_query("SELECT id_categoria,nombre_categoria FROM tacones_norte");
		{
		echo ' <ul>
					<li>
						<a href="'.$tacones_norte[0].'">'.$tacones_norte[1].'</a>';
		$estilo_sql = mysql_query("SELECT id,nombre,menu_id,cont_item FROM submenu WHERE menu_id = '".$tacones_norte[0]."'");
		if(mysql_num_rows($submenu_sql) > 0)
		{
		echo '<div>
							<ul>';
		while($submenu = mysql_fetch_row($submenu_sql))
		{
		echo '<li><a href="'.$submenu[0].'">'.$submenu[1].' ('.$submenu[3].')</a></li>';
		}
		mysql_free_result($submenu_sql);
		echo '</ul>
						</div>';
		}
		echo '</li>
				</ul>';
		}
		mysql_free_result($menu_sql);
		?>
</div>


<?php

include("footer.php");
?>
</body>
   
</html>