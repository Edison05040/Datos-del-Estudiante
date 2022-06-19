<?php
$servidor="localhost";
$usuario="registros";
$clave="1234567";
$base="instituto";
$tabla="estudiantes";

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$carrera=$_POST['carrera'];
$nivel=$_POST['nivel'];

$conexion=mysqli_connect($servidor,$usuario,$clave) or die ("error en la coneccion con el servidor");
$bases=mysqli_select_db($conexion,$base) or die ("error al conectar con la base de datos");

$insertar="insert into estudiantes values ('$codigo','$nombre','$carrera','$nivel')";
$resultado=mysqli_query($conexion,$insertar) or die ("error al conectar con la tabla");
mysqli_close($conexion);
echo("LOS DATOS SE HAN GRABADO EXITOSAMNETE");
?>