<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos_a.css" />
    <link rel="icon" href="img/barberlogo.png">
    <title>Edición de Datos</title>
    <style>
        body {
            background-image: url("img/ci22.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: Century Gothic;
            color: white;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background-color: gold;
            color: black;
            padding: 10px;
            text-align: center;
        }
        td {
            padding: 8px;
            text-align: center;
            color: black;
        }
        .formulario {
            background-color: black;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            margin: 40px auto;
            box-shadow: 0px 0px 15px gold;
        }
        .formulario h1 {
            color: gold;
            text-align: center;
        }
        .formulario label {
            color: white;
        }
        .formulario input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: none;
        }
        .formulario input[type="submit"] {
            background-color: gold;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }
        .formulario input[type="submit"]:hover {
            background-color: #caa400;
        }
        .btn-volver {
            display: block;
            margin: 20px auto;
            background-color: gold;
            color: black;
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        .btn-volver:hover {
            background-color: #caa400;
        }
    </style>
</head>
<body>

<?php
// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "bd_barberstyle");
if (mysqli_connect_errno()) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

// Mostrar tabla de servicios
echo '<h1 style="text-align:center; color:black;">Edición de Datos</h1>';
echo '<table border="1">';
echo '<tr><th>Id</th><th>Servicios</th><th>Img</th><th>Duración</th><th>Precio</th><th>Acción</th></tr>';

$consulta = "SELECT * FROM servicios";
$ejecutar = mysqli_query($con, $consulta);

while ($fila = mysqli_fetch_assoc($ejecutar)) {
    echo "<tr>
            <td>{$fila['id']}</td>
            <td>{$fila['servicio']}</td>
            <td>{$fila['img']}</td>
            <td>{$fila['duracion']}</td>
            <td>{$fila['precio']}</td>
            <td><a href='editar_s.php?editar={$fila['id']}' style='background-color:gold; padding:5px 10px; border-radius:5px; text-decoration:none; color:black;'>Editar</a></td>
          </tr>";
}
echo '</table>';

// Si se selecciona un servicio para editar
if (isset($_GET['editar'])) {
    $editar_id = $_GET['editar'];
    $consulta = "SELECT * FROM servicios WHERE id='$editar_id'";
    $ejecutar = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_assoc($ejecutar);

    $servicio = $fila['servicio'];
    $precio = $fila['precio'];
    $duracion = $fila['duracion'];
    $img = $fila['img'];
    ?>

    <div class="formulario">
        <h1>Formulario de Actualización</h1>
        <form method="POST">
            <label>Editar Servicio:</label>
            <input type="text" name="servicio" value="<?php echo $servicio; ?>" required>

            <label>Actualizar Precio:</label>
            <input type="text" name="precio_s" value="<?php echo $precio; ?>" required>

            <label>Actualizar Tiempo del servicio:</label>
            <input type="text" name="tiempo_s" value="<?php echo $duracion; ?>" required>

            <label>Actualizar la Dirección de Imagen:</label>
            <input type="text" name="imagen" value="<?php echo $img; ?>" required>

            <input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
        </form>
    </div>

    <?php
    // Actualizar datos
    if (isset($_POST['actualizar'])) {
        $editar_servicio = $_POST['servicio'];
        $editar_precio_s = $_POST['precio_s'];
        $editar_tiempo_s = $_POST['tiempo_s'];
        $editar_imagen = $_POST['imagen'];

        $actualizar = "UPDATE servicios SET servicio='$editar_servicio', precio='$editar_precio_s', duracion='$editar_tiempo_s', img='$editar_imagen' WHERE id='$editar_id'";
        $ejecutar = mysqli_query($con, $actualizar);

        if ($ejecutar) {
            echo "<script>alert('Datos editados correctamente.'); window.location='editar_s.php';</script>";
        }
    }
}
?>

<button class="btn-volver" onclick="window.location.href='crud_s.php'">Volver</button>

</body>
</html>
