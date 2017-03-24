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
//Imprimir datos de envio de informacióny a donde está llegando
print_r('$_REQUEST');
?>


     <?php
	 
//Para halar los datos del formulario "creación de usuarios"
        $name=$_POST['nombre'];   
        $last_name=$_POST['apellido'];
        $user=$_POST['doc_num'];
        $email=$_POST['correo'];
        $passw=$_POST['contraseña'];
        //$passw2=$_POST['contraseña2'];
        $type_doc=$_POST['type_doc'];
        //$type_doc2=$_POST['ti']
       // $type_doc3=$_POST['ce']
       // $type_doc4=$_POST['dni']
        ?>             
                     


     <?php
//configuración base de datos
     $host="localhost";
     $usuario="admin_tnorte";
     $passw="Adm1n7norte";
     $db="tacones_norte";
     $enlace=mysql_connect($host,$usuario,$passw);
     mysql_select_db($db,$enlace);
  
//Query de ingreso de datos
     $consulta= mysql_query("insert into registrados (nombre,apellido,doc_num,type_doc,email,contraseña)"
             . " values ('$name','$last_name','$user','$email''$type_doc','$passw')",$enlace);
     ?>
  
  <strong>Felicidades!!  Su registro se ha realizado exitosamente.</strong>
     
     
 </body>

</html>


