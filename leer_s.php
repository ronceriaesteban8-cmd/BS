<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos_a.css" />
    <link rel="icon" href="img/barberlogo.png">
	<title>Lectura de Datos</title>
</head>
<body>
   
<?php
   $con=mysqli_connect("localhost","root","","bd_barberstyle") or die ("Error de conexión");
?>
<center><br><h1>Lectura de servicios BARBER STYLE</h1><br>
	<table style="border: black; margin-right: 900px;" border="2">
     <tr><br>
     	<th>Id</th>
     	<th>Servicios</th>
     	<th>Precio</th>
     	<th>Tiempo </th>
      <th>Imagen</th>
     </tr>
     <?php
     $consulta="SELECT * FROM crear_s";
     $ejecutar=mysqli_query($con, $consulta);
     $i=0;
     while ($fila=mysqli_fetch_array($ejecutar)){
     	$id=$fila['id'];
     	$servicio=$fila['servicio'];
     	$precio_s=$fila['precio_s'];
     	$tiempo_s=$fila['tiempo_s'];
      $url_s=$fila['url_s'];
     	$i++;
     	?>
     	<tr aling="center">
     		<td><?php echo $id; ?></td>
     		<td><?php echo $servicio; ?></td>
     		<td><?php echo $precio_s; ?></td>
     		<td><?php echo $tiempo_s; ?></td>
         <td><img src=" <?php echo $url_s; ?> " height="100px"> </td>
     	</tr>
     	<?php
     }
     ?>
 </table>
</center>
<button style="color: black; background: #a6a6a6; margin-left: 50px; margin-top: 50px; border-bottom: green; " role="link" onclick="location='crud_s.php'">Volver a la CRUD de servicios</button>
</body>

</html>