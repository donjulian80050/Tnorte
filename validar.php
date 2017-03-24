<?php
  $con = new mysqli('localhost', 'admin_tnorte', 'Adm1n7norte', 'tacones_norte');
  $user= $_POST['usuario'];
  $passw= $_POST['passw'];
if ($user == null||$passw == null)
    {
    echo '<span>*En necesario completar TODOS los campos.</span>';
   //die('Could not connect to MySQL: ' . mysqli_connect_error());
}
else
{
    $consulta= mysqli_query($con, 'SELECT user, passw FROM usuario WHERE user="$user" AND passw="#passw"');
    if(mysqli_num_rows($consulta)>0)
    {
        $_SESSION['usuario']= $user;
        echo '<script>location.href="welcome.php"</script>';
    }
        else
    {
       echo '<span>*Usuario y/o contraseña inválidos.</span>';
    }
}

    