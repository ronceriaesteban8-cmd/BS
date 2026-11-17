<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/barberlogo.png">
    <title>CREAR DATOS</title>
</head>
<body>
<center>
    <br><h1> REGISTRARSE </h1>
     <form method="POST" action="index.php">

  <label for="nombreProducto">Nombre del Producto</label>
  <br><input type="text"  name="nombreProducto" placeholder="Escriba el Producto"><br><br>

  <label for="precio">Digite el Precio sin (, ni .)</label>
  <br><input type="text"  name="precio" placeholder="Digite el monto"><br><br>

  <label for="existencias">Existencias:</label>
  <br><input type="text"  name="existencias" placeholder="Digite las Existencias"><br><br>


</form>
</center>
<?php
     if(isset($_POST['insert']))
     {
      $nombreproducto=$_POST['nombreProducto'];
      $precio=$_POST['precio'];
      $existencias=$_POST['existencias'];
      $imagen=$_POST['imagen'];
      $insertar="INSERT INTO productos(nombreProducto, precio, existencias, imagen) VALUES ('$nombreProducto', '$precio', '$existencias', $imagen')";
        $ejecutar=mysqli_query($con, $insertar);
        if($ejecutar)
            {echo "<scprit>alert('Creado Correctamente')</scprit";}
     }
     ?>
<a href="index.php">Volver a la Pantalla de Inicio</a>
</body>
</html>