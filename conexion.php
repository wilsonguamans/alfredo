<?php 
$user = "root";
$pass = "";
$host = "localhost";
$datab = "registro";
$connection = mysqli_connect($host, $user, $pass);
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "Hemos conectado al servidor <br>" ;
        }
       
        $db = mysqli_select_db($connection,$datab);
        if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "Tabla seleccionada" ;
};

 
?>