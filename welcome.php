<?php
    session_start();
    if (isset($_SESSION['usuario']))
    {
   ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestor administrativo</title>
        <link rel="stylesheet" href="estilo_tnorte.css">
        <script type="text/javascript" src="js/perzonalizacion.js"></script>
    </head>
    <body>
        <div class="contenedor">
            <h1>Bienvenido<?php echo $_SESSION['usuario']; ?></h1>
            <img src="tnorte_logo.png" alt="Tacones Norte">
            <form name="admin_prod">
                
            </form>
            <p>Aqui poner todo lo que queramos que vean los usuario</p>
            <a href="logout.php">Cerrar sesión</a>
        </div>
    </body>
</html>
<?php
    }
    else
    {
        header('Location : indexlogin.php');
    }
?>