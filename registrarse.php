<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/barberlogo.png">
    <?php
        $con = mysqli_connect("localhost","root","","bd_barberstyle") or die ("Error de conexión");
    ?>
    <title>Registro Barber Style</title>
    <style>
        body {
            background-image: url("img/fondogif.gif");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Century Gothic', sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            overflow: hidden; /* No scroll vertical ni horizontal */
            height: 100vh; /* Ajusta al alto de pantalla */
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: rgba(0,0,0,0.8);
            padding: 15px;
            width: 100%;
        }

        nav ul {
            display: flex;
            list-style: none;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white; /* Enlaces blancos */
            font-weight: bold;
            letter-spacing: 2px;
            transition: 0.3s;
        }

        nav ul li:first-child a {
            color: #BCA119; /* El primer enlace (nombre) dorado */
        }

        nav ul li a:hover {
            color: #d4c35a;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex: 1; /* Ocupa todo el espacio restante */
            padding: 20px;
            box-sizing: border-box;
        }

        .form-section, .info-section {
            background: rgba(0, 0, 0, 0.75);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 7px 13px 37px black;
            box-sizing: border-box;
        }

        .form-section {
            width: 350px;
        }

        .form-section h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #BCA119;
            font-size: 22px;
        }

        .controls {
            width: 100%;
            background-color: black;
            color: white;
            border: 2px solid #BCA119;
            padding: 10px;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .controls::placeholder {
            color: #ccc;
        }

        .boton {
            width: 100%;
            background-color: #BCA119;
            border: none;
            padding: 12px;
            color: black;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        .boton:hover {
            background-color: #d4c35a;
        }

        .info-section {
            width: 500px;
            text-align: center;
        }

        .info-section h2 {
            font-size: 26px;
            margin-bottom: 20px;
            background-color: black;
            border-radius: 8px;
            padding: 10px;
        }

        .cont {
            background-color: black;
            color: white; /* Cambiado a blanco */
            margin: 15px auto;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 7px 13px 30px black;
            max-width: 400px;
        }

        .info-section img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 20px;
        }

        footer {
            background-color: black;
            text-align: center;
            padding: 10px;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">BarberStyle.club</a></li>
            <li><a href="contactenos.php">Contactenos</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <!-- Formulario -->
    <div class="form-section">
        <h2>Registrate en BarberStyle.club</h2>
        <form method="POST" action="">
            <input class="controls" type="text" name="Nombre" placeholder="Escriba su nombre" required>
            <input class="controls" type="text" name="Apellido" placeholder="Escriba su apellido" required>
            <input class="controls" type="email" name="Email" placeholder="Escriba su email" required>
            <input class="controls" type="text" name="Telefono" placeholder="Escriba su teléfono" required>
            <input class="controls" type="password" name="Clave" placeholder="Escriba su clave" required>
            <input class="boton" type="submit" name="Enviar" value="Enviar">
        </form>
        <?php
        if(isset($_POST['Enviar'])){
            $Nombre=$_POST['Nombre'];
            $Apellido=$_POST['Apellido'];
            $Email=$_POST['Email'];
            $Telefono=$_POST['Telefono'];
            $Clave=$_POST['Clave'];
            $insertar="INSERT INTO usuarios (Nombre, Apellido, Email, Telefono, Clave) VALUES ('$Nombre', '$Apellido', '$Email', '$Telefono', '$Clave')";
            $ejecutar= mysqli_query($con,$insertar);
            if($ejecutar) {
                echo "<script>alert('Registrado correctamente')</script>";
            }
        }
        ?>
    </div>

    <!-- Información -->
    <div class="info-section">
        <h2>¿Qué te brinda BarberStyle.Club?</h2>
        <div class="cont">Las mejores referencias y actualizaciones de la industria de las barberías en Bogotá y el mundo</div>
        <div class="cont">La última tendencia en cortes, productos y servicios relacionados a sus preferencias</div>
        <img src="img/imagen.png" alt="Barber Style">
    </div>
</div>

<footer>
    © 2025 www.barberstyle.club - Barber Style
</footer>

</body>
</html>
