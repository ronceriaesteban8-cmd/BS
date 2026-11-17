<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/barberlogo.png">
    <title>Inicio Sesión Administrador - Barber Style</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url("img/fondo_x.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Century Gothic', sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        /* Oscurecer fondo */
        body::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        header {
            position: absolute;
            top: 0;
            width: 100%;
            padding: 15px 0;
            background: rgba(0,0,0,0.85);
            box-shadow: 0 4px 8px rgba(0,0,0,0.4);
            z-index: 2;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 25px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav ul li:first-child a {
            color: #BCA119;
        }

        nav ul li a:hover {
            color: #BCA119;
        }

        /* Contenedor del formulario */
        .contenedor {
            position: relative;
            background: rgba(0, 0, 0, 0.85);
            padding: 40px;
            border-radius: 15px;
            border: 2px solid #BCA119;
            box-shadow: 0 8px 25px rgba(0,0,0,0.7);
            z-index: 1;
            width: 420px;
            text-align: center;
        }

        .contenedor h2 {
            color: #BCA119;
            margin-bottom: 25px;
            font-size: 20px;
        }

        .controls {
            width: 100%;
            background: #7A775D;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: none;
            font-size: 16px;
            color: white;
            outline: none;
            transition: box-shadow 0.3s, background 0.3s;
        }

        .controls::placeholder {
            color: white;
        }

        .controls:focus {
            background: #BCA119;
            box-shadow: 0 0 8px #BCA119;
        }

        .boton {
            width: 100%;
            background-color: #BCA119;
            border: none;
            padding: 12px;
            font-size: 17px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .boton:hover {
            background-color: #7A775D;
            color: white;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: black;
            color: white;
            text-align: center;
            padding: 8px 0;
            font-size: 13px;
            z-index: 2;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href="index.php">BarberStyle.club</a></li>
            <li><a href="registrarse.php">Registrarse</a></li>
            <li><a href="contactenos.php">Contactenos</a></li>
        </ul>
    </nav>
</header>

<div class="contenedor">
    <h2>Inicia sesión en BarberStyle.Club como administrador</h2>
    <form method="POST" action="validar3.php">
        <input class="controls" type="text" name="Administrador" placeholder="Escriba su ID ADM" required>
        <input class="controls" type="password" name="Clave" placeholder="Escriba su clave" required>
        <input type="submit" class="boton" name="Enviar" value="Ingresar">
    </form>
</div>

<footer>
    © 2023 www.barberstyle.club - Barber Style
</footer>

</body>
</html>
