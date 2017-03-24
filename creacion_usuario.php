<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Crea tu usuario</title>
		<link rel="stylesheet" href="css/estilo_tnorte.css">
    </head>
    

    <body>
	<?php
	include("header.php");
	?>

	<?php
//Para ver los datos y adonde esta enviando	
print_r('$_REQUEST');
?>
	<h2>Crea tu usuario</h2>
	<p>Por favor llena este formulario para crear tu usuario y contraseña</p>
	<br>
	<hr>
	
        <form name="crear_usuario" method="post" action="registro.php">
            <p>*Digita tu nombre</p>
            <p><input type="text" name="nombre" autocomplete="on" autofocus="on" placeholder="Tu nombre" required/></p>
            <p>*Digita tu Apellido</p>
            <p><input type="text" name="apellido" autocomplete="on" autofocus="on" placeholder="Tu apellido" required/></p>
            <p>*Numero de Documento</p>
            <p><input type="number" name="doc_num" autocomplete="on" 
                autofocus="on" placeholder="Solo numeros" required /></p>
            <p name="type_doc">*Tipo de Documento</p>
                    <p><select>
                            <option selected="cc">CC</option>
                            <option selected="ti">TI</option>
                            <option selected="ce">CE</option>
                            <option selected="dni">DNI</option>
                            //<option selected="seleccione uno">---Seleccione uno---</option>
                        </select>
                    </p>
            <p>*Correo Electrónico</p>
            <p><input type="email" required name="correo" placeholder="E-mail"/></p>
            <p>Asigna contraseña</p>
            <p><input type="password" required name="contraseña" placeholder="Contraseña"/></p>
            <p>Confirmar la contraseña</p>
            <p><input type="password" required name="contraseña2" placeholder="Confirmar Contraseña"/></p>
			<br>
			<hr>
			
            <input type="submit" name="enviar" value="Enviar"/>
            <input type="reset" name="reset" value="Limpiar"/>
            <button>Regresar</button>
			<br>
			<br>
			<br>
		 </form>
         </body>
          

    
</html>
