<!DOCTYPE html>
<html>
<head>
    <title>EDITAR IMAGENES</title>
    <link rel="icon" href="img/barberlogo.png">
    <meta charset="utf-8">
    <style>
        body {
            background-image: url("img/fondo_i.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: Century Gothic;
        }

        h1 {
            color: gold;
            font-size: 50px;
            text-shadow: 2px 2px 5px black;
        }

        .container {
            background-color: rgba(0,0,0,0.9);
            width: 500px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px gold;
            color: white;
        }

        label {
            font-size: 18px;
            color: gold;
        }

        input[type="text"], input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: none;
            font-size: 16px;
        }

        input[type="submit"], .btn-volver {
            background-color: gold;
            color: black;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="submit"]:hover, .btn-volver:hover {
            background-color: white;
            color: black;
        }

        .btn-volver {
            margin-top: 15px;
            display: inline-block;
            text-decoration: none;
            text-align: center;
        }
    </style>
</head>
<body>
<?php 
$con = mysqli_connect("localhost", "root", "", "bd_barberstyle") or die ("Error de conexión");
?> 

<center>
    <br>
    <h1>EDITAR IMAGENES</h1>
    <br>
    <div class="container">
        <form method="POST" action="">
            <label>ID de la imagen:</label><br>
            <input type="number" name="id" placeholder="Ingrese el ID de la imagen" required><br>

            <label>Nueva URL de la imagen:</label><br>
            <input type="text" name="imagen" placeholder="Ingrese la nueva URL" required><br><br>

            <input type="submit" name="update" value="Actualizar">
        </form>
        <br>
        <a href="http://localhost/BS/crud_s.php" class="btn-volver">Volver</a>
    </div>
</center>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $imagen = $_POST['imagen'];

    $actualizar = "UPDATE galeria SET imagen='$imagen' WHERE id='$id'";
    $ejecutar = mysqli_query($con, $actualizar);

    if ($ejecutar) {
        echo "<script>alert('Imagen actualizada correctamente');</script>";
    } else {
        echo "<script>alert('Error al actualizar la imagen');</script>";
    }
}
?>
</body>
</html>
