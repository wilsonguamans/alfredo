<?php 
include("conexion.php");
$sql= "insert into usuario
VALUES(null,'".$_POST[NOMBRE]."','".$_POST[APELLIDO]."','".$_POST[CORREO]."','".$_POST[CONTRASEÑA]."')";
$_resultado=mysql_query($con, $sql) or die ('error en queri database');
mysql_close($con);

echo 'el ingresado es:'.$_POST["nombre"].$_POST["apellido"].'<br>';
echo 'el correo es:'.$_POST["email"].'<br>';
echo 'contraseña es:'.$_POST["contraseña"].'<br>';

 ?>