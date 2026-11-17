<?php
// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "bd_barberstyle") 
    or die("Error de conexión: " . mysqli_connect_error());

// Procesar el formulario si se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $fecha = mysqli_real_escape_string($con, $_POST['fecha']);
    $servicio = mysqli_real_escape_string($con, $_POST['servicio']);

    $insertar = "INSERT INTO citas (nombre, telefono, fecha, servicio) 
                 VALUES ('$nombre', '$telefono', '$fecha', '$servicio')";

    if (mysqli_query($con, $insertar)) {
        echo "<script>alert('Registrado correctamente');</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="img/barberlogo.png" />
    <title>Reserva de Citas</title>
    <style>
        body {
            margin-top: 90px;
            font-family: Century Gothic;
            background-image: url("img/fondo_i.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            backdrop-filter: blur(0.4rem);
            border: 1px solid white;
            border-radius: 5px;
        }
        label { 
            color: white; 
            display: block; 
            margin-bottom: 8px; 
        }
        input, select, textarea {
            width: 95%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1rem;
        }
        input[type="submit"], button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 1.1rem;
            margin-right: 10px;
        }
        input[type="submit"]:hover, button:hover { 
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: white">Reserva de Citas BarberStyle.CLUB</h1>
        <form method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required />

            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" 
                   pattern="[0-9]{10}" placeholder="Ej: 3001234567" required />

            <label for="fecha">Fecha de la Cita:</label>
            <input type="date" id="fecha" name="fecha" required />

            <label for="servicio">Servicio:</label>
            <select id="servicio" name="servicio" required>
                <option value="">-- Selecciona un servicio --</option>
                <option value="Perfilación de cejas">Perfilación de cejas</option>
                <option value="Corte">Corte</option>
                <option value="Tinturas">Tinturas</option>
                <option value="Skin care">Skin care</option>
                <option value="Perforaciones">Perforaciones</option>
            </select>

            <input type="submit" value="Enviar" />
            <button type="button" onclick="window.location.href='http://localhost/bs/bienvenido_u.php'">Volver</button>

        </form>
    </div>
</body>
</html>
