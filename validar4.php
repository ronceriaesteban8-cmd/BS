<?php
$nombre=$_POST['nombre']; 
$email=$_POST['email'];
$fecha=$_POST['fecha'];
$servicio=$_POST['servicio'];
$con=mysqli_connect("localhost", "root", "", "bd_barberstyle") or die ("ERROR DE CONEXION");
$consulta="SELECT * FROM citas WHERE Administrador='$Administrador' AND Clave= '$Clave'";
$resultado=mysqli_query ($con, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0){
	//CODIGO PARA MANEJO DE SESIONES
session_start();
$_SESSION['Email']=$Email;
header("location:bienvenido_a.php");
    //TERMINA CODIGO DE MANEJO DE SESIONES
header("location:bienvenido_a.php");    	
}
else
{
	
	echo "ERROR DE AUTENTIFICACION";
   
}
mysqli_free_result($resultado);

?>