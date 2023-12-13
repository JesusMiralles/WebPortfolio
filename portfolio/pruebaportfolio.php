<?php
$servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "prueba2"; // El usuario que acabamos de crear en la base de datos 
$contraseña = "1234"; // La contraseña del usuario que utilizaremos 
$BD = "prueba2"; // El nombre de la base de datos 
$conexion = new mysqli($servidor, $usuario, $contraseña, $BD);

if (!$conexion) { 
    die('<strong>No pudo conectarse:</strong> ' . mysql_error()); 
}else{ 

} 
mysqli_select_db($conexion, $BD) or die(mysqli_error($conexion));
?>

