<!DOCTYPE html>
<html>
<link rel="stylesheet" href="esti.css" />
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/barberlogo.png">
    
    <title >CREAR SERVICIOS</title>
</head>

<body>
<?php 
$con=mysqli_connect("localhost", "root", "", "bd_barberstyle") or die ("Error de conexion");
?> 
<center>
    <br><h1 style="margin-left: 600px;"> CREAR SERVICIOS </h1>
    <div  class="p">
        <br>
     <form style="margin left: 900px;"  method="POST" action="crear_s.php">

  <label style=" color: white; "  for="servicio">Nombre del servicio</label>
  <br><input type="text"  name="servicio" ><br><br>

  <label style="color: white;" for="img">Url de la imagen</label>
  <br><input type="text"  name="img" ><br><br>

  <label style="color: white;" for="duracion">Tiempo que requiere este servicio</label>
  <br><input type="text"  name="duracion" pl ><br><br>

  <label style="color: white;" for="precio">Precio</label>
<br><input type="text" name="precio" ><br><br>
<br>
  <input type="submit" name="insert" style="background-color: white; border: white; width: 100px; height: 25px; cursor: pointer; font-family: Century Gothic; " value="CREAR"><br>

</form>
</div>
<br>
<button style="margin-left: 600px; background-color: black; color: white; cursor: pointer; font-family: Century Gothic; border-radius: 8px; width: 140px; height: 25px; border: none;" role="link" onclick="location='crud_s.php ?>'">Volver</button><br>
</center>

<?php
     if(isset($_POST['insert']))
     {
      $servicio=$_POST['servicio'];
      $img=$_POST['img'];
      $duracion=$_POST['duracion'];
      $precio=$_POST['precio'];
     
      
      $insertar="INSERT INTO servicios ( servicio, img, duracion, precio) VALUES ('$servicio', '$img', '$duracion', '$precio')";
        $ejecutar=mysqli_query($con, $insertar);
        if($ejecutar)
            {echo "<scprit></scprit";}
     }
     ?>

</body>

<style>
    .p{
    background-color: black;
    border-radius: 8px;
    margin-left: 600px;
    width: 500px;
    height: 350px;
    }
    body
    {
    background-image: url("img/ffondo.3.png");
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
        font-family: Century Gothic;
    }
</style>

</html>