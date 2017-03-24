<!doctype html>
<html lang="es">

<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
  
  <title> Tacones Norte - Contacto </title>
  <link rel="stylesheet" href="css/estilo_tnorte.css"> 
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/perzonalizacion.js"></script>

  <link rel="shortcut icon" href="imagenes/logo.jpg" type="image/x-icon">﻿
 
 
<style type="text/css">
  html, body { height: 100%; 
               margin: 0; 
               padding: 0;}
  #map { height: 50%; 
         width: 92%; 
         margin: 0 50% 0 5%;}
</style>
 
</head>
  
<body onload="mueveReloj()" onload="mensajes()">
  
<?php

include("header.php");
ini_set("display_errors",0);
include("/functions/functions.php");
?>

	
                <h2>Para contactarmos</h2>
		<div >
                    <section id="formulario">
			
                        <p>Sí desea contactarse con nosotros por escrito en esta sección está disponible un formulario
                                         donde puede hacerlo.
                        </p>
                                         <br>
                        <p>La pagina aún esta en construcción asi que si desea realizar un pedido por el momento puede hacerlo por este medio, en la casilla
                            de asunto puede seleccionar las opciones de compra o cotización de productos. la venta mínima por este medio 
                            virtual es de una (1) docena, por local puede comprar cantidades menores a esta.
			</p>
			
			<p>Le estaremos devolviendo una respuesta via correo electrónico lo mas pronto que nos sea 
                            posible.
                        </p>
                        <p>    
                        Reuerde que también puede llamarnos al telefóno 2392259 en la ciudad de Bogotá.
                        </p>
                    </section>    
                </div>
                        
                        <div id="formulario-cont">
				<form name="contactenos" method="post" action="">
				<p for ="asunto" id='formu'>*Asunto</p>
				<p>
				<select name="asunto" type="select"><br>
				<optgroup label="Seleccione Uno">
					<option value="Compra"selected>Compra
					<option value="Cotización"selected>Cotización
					<option value="Estado de mi pedido"selected>Estado de mi pedido
					<option value="Reclamo"selected>Reclamo
					<option value="Sugerencia"selected>Sugerencia
					<option value="--Seleccione uno--" selected>--Seleccione uno--
				</optgroup>
			</select>
						<?php
							$asunto= $_REQUEST['asunto'];
							print ($asunto);
						?>
				</p>
					<p for ="first_name">*Nombre</p>
						<p>
							<input name="first_name" title="Dejanos su nombre" type="text" required/autocomplete="on" value="<?=$_REQUEST['first_name']?>">
						</p>
					<p for ="last_name">*Apellido</p>
						<p>
							<input name="last_name" title="Dejanos su apellido" type="text" value="<?=$_REQUEST['last_name']?>" required/autocomplete="on">
						</p>
						<p for ="empresa">*Empresa</p>
						<p>
							<input name="empresa" title="Su empresa aquí" value="<?=$_REQUEST['empresa']?>" type="text" required/autocomplete="on">
						</p>
						<p for ="pais">*País</p>
						<p>
						<select name="pais" title="Su país aquí" value="<?=$_REQUEST['pais']?>" type="selected" required/autocomplete="on">
							
							<optgroup label="America Latina">
								<option value="Argentina"selected>Argentina
								<option value="Bolivia"selected>Bolivia
								<option value="Chile"selected>Chile
								<option value="Costa Rica"selected>Costa Rica
								<option value="Cuba"selected>Cuba
								<option value="Ecuador"selected>Ecuador
								<option value="El Salvador"selected>El Salvador
								<option value="Guatemala"selected>Guatemala
								<option value="Honduras"selected>Honduras
								<option value="México"selected>México
								<option value="Nicaragua"selected>Nicaragua
								<option value="Panamá"selected>Panamá
								<option value="Paraguay"selected>Paraguay
								<option value="Perú"selected>Perú
								<option value="Puerto Rico"selected>Puerto Rico
								<option value="República Dominicana"selected>República Dominicana
								<option value="Uruguay"selected>Uruguay
								<option value="Venezuela"selected>Venezuela
								<option value="Colombia"selected>Colombia
							</optgroup>
							<optgroup label="North America">
								<option value="Estados Unidos"selected>Estados Unidos
								<option value="Canadá"selected>Canadá
								<option value="México"selected>México
								<option value="---Seleccione uno---"selected>---Seleccione uno---
							</optgroup>
							
						</select>
						</p>
						<p for ="city">*Ciudad</p>
						<p>
							<input name="city" title="Su ciudad aquí" type="text" value="<?=$_REQUEST['ciudad']?>"required/autocomplete="on">
							
						</p>
						
					<p for = "email">*Correo</p>
						<p>
							<input name="email" title="Dejame tu Correo" type="email" value="<?=$_REQUEST['email']?>" required/autocomplete="on"><span class="form_hint">    Ejemplo: "nombre@dominio.com"</span>
						</p>
					<p for="tel">*Telefonos de contacto</p>
					
						<p>
						<input name="tel" title="Indicanos un numero celular o fijo" type="number" value="<?=$_REQUEST['tel']?>" required/autocomplete="on">
							<span class="form_hint">Celular o Fijo</span>
						</p>
					<p for="mensaje">*Redacta tu mensaje</p>	
					<p>
						<textarea COLS="35" ROWS="10" NAME="mensaje" value="<?=$_REQUEST['mensaje']?>">
						</textarea>
					</p>
					<?PHP
						$mensaje=$_REQUEST['mensaje'];
						print ($mensaje);
					?>
					<p>
					<INPUT TYPE="submit" NAME="enviar" value="ENVIAR">
						<!--<button type="button" NAME="enviar" value="ENVIAR" onclick="send();">Enviar</button>-->
						
						
							<?PHP
								$enviar=$_REQUEST['enviar'];
								//if ($enviar)
									//print ("Se ha enviado el mensaje");
							?>
						<input type="reset" name="restablecer" value="RESTABLECER">
					</p>  
					
				</form>
				
					<?PHP
						if(isset($_POST['email']) && $_REQUEST['enviar']="ENVIAR"){
							// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
							$email_to="julian80050@gmail.com";
							$email_subject="Formulario TNORTE";
							// Aquí se deberían validar los datos ingresados por el usuario
							if(!isset($_post['first_name']) ||
							!isset ($_post['last_name']) ||
							!isset ($_post['empresa']) ||
							!isset ($_post['pais']) ||
							!isset ($_post['ciudad']) ||
							!isset ($_post['email']) ||
							!isset ($_post['tel']) ||
							!isset ($_post['asunto']) ||
							!isset ($_post['mensaje'])) {
								echo "Ocurrió un error, el mensaje no ha sido enviado.";
								echo "Por favor, vuelva atrás y verifique la información ingresada";
	//							die();
							}
							$email_message = "Detalles del formulario de contacto:\n\n";
							$email_message .= "Asunto: " . $_POST['asunto'] . "\n";
							$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
							$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
							$email_message .= "Empresa: " . $_POST['empresa'] . "\n";
							$email_message .= "País: " . $_POST['pais'] . "\n";
							$email_message .= "Ciudad: " . $_POST['city'] . "\n";
							$email_message .= "E-mail: " . $_POST['email'] . "\n";
							$email_message .= "Teléfonos de contacto: " . $_POST['tel'] . "\n";
							$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";
							
							
							if(isset($_REQUEST['enviar'])){
								echo enviarCorreo($email_to,$_POST['first_name']." ".$_POST['last_name'], $email_subject, $email_message);
							}
							
							 
							
							/*
							// Ahora se envía el e-mail usando la función mail() de PHP
							$headers = 'From: '.$email_from."\r\n".
							'Reply-To: '.$email_from."\r\n" .
							'X-Mailer: PHP/' . phpversion();
							if(mail($email_to, $email_subject, $email_message, $headers)){
								echo "¡El formulario se ha enviado con éxito!";
							}else{echo "No se envio el Mensaje";}*/

						}else{
							//echo "no entra";
							
						}
						
					?>
                            </div>
			
		
	

    <div class="ubicacion">
	<article>
                <h2>Nuestra ubicación</h2>
                <hr>
		<img src="imagenes/ubicacion.jpg" alt="">
                    <p>Nos puede encontrar en el barrio Restrepo, Bogotá (Colombia)</p>
                    <p>En la parte inferior de la página puede encontrarnos con Google Maps, 
                       podrá observar que nos encontramos al pie de Nuestra Señora de la Valvanera.</p>
        </article><hr>
    </div>
	
<div id="map"></div>
						<script type="text/javascript">
								
								function initMap() {
								var myLatLng = {lat: 4.587357, lng: -74.102941};
								
								// Create a map object and specify the DOM element for display.
								var map = new google.maps.Map(document.getElementById('map'), {
								center: myLatLng,
								scrollwheel: true,
								zoom: 20
								});
								// Create a marker and set its position.
								var marker = new google.maps.Marker({
								map: map,
								position: myLatLng,
								title: 'Tacones Norte'
								});
								}
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQCQP5GGjuJACrPfiJUNO-5yWJGthvaoU&callback=initMap"
						async defer>
						</script>
<?php

include("footer.php");
?>

</body>
</html>