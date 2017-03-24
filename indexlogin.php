
<?php
    session_start();
    if (isset($_SESSION['usuario']))
    {
        header('Location : welcome.php');
    }
else
{
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>INICIO DE SESIÓN</title>
        <link rel="stylesheet" href="css/estilo_tnorte.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>

    <body>
        <div class="contenedor">
           <h2><center>INICIO DE SESIÓN</center></h2>
            <div id="formulario-login">
                <form method="POST" action="return false" onsubmit="return false">
                    <a><center>Ingresa tu Usuario</center></a><center><input type="text" value="" id="usuario" name="usuario" placeholder="Ingresa tu usuario"></center>
                    <a><center>Ingresa tu Contraseña</center></a><center><input type="password" value="" id="passw" name="passw"  placeholder="Ingresa tu contraseña"></center>
                    <button type='submit' onclick="validar(document.getElementById('usuario').value,document.getElementById('passw').value);">
                           Ingresar</button>
                </form>
                
            </div>
            <script>
                function validar(usuario,passw)
                {
                    $.ajax({
                        url:'validar.php',
                        type: 'POST',
                        data: 'usuario='+usuario+'&passw='+passw,
                        success: function(resp){
                            $('#resultado').html(resp);
                            }
                    });
                }
            </script>
        </div>
        <h4>No tienes cuenta? creala haciendo click aquí</h4><input type="submit" name="crear" value="Crear"/>
    </body>
</html>
<?php
}
?>

<hr>
    <div class="alert">
        <p><strong>IMPORTANTE:</strong> Por el momento, para esta sección sólo podrán acceder usuarios con role 
                administrativo, mas adelante se habilitaremos el acceso a clientes.</p>
    </div>
<hr>

