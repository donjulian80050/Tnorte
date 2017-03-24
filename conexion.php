<?php

$host = "localhost";
$user = "alex";
$pass = "prueba";
$db = "usuarios";
$conexion = mysql_connect($host, $user, $pass) OR die("No hay conexion a la base de datos");
mysql_select_db($db, $conexion) OR die("No existe la base de datos");
?>
