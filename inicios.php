<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/barberlogo.png">
    <title>Inicio Sesión Barber Style</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-image: url("img/fondoii.png");
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

        /* Capa oscura sobre el fondo */
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

        /* Contenedor principal */
        .contenedor {
            position: relative;
            background: rgba(0, 0, 0, 0.85);
            padding: 40px;
            border-radius: 15px;
            border: 2px solid #BCA119;
            box-shadow: 0 8px 25px rgba(0,0,0,0.7);
            z-index: 1;
            width: 420px; /* Más grande que antes */
            text-align: center;
        }

        .contenedor h2 {
            color: #BCA119;
            margin-bottom: 25px;
            font-size: 24px;
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

        .btn-admin {
            display: inline-block;
            background-color: #BCA119;
            color: black;
            padding: 10px 20px;
            border-radius: 14px;
            font-weight: bold;
            margin-bottom: 20px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .btn-admin:hover {
            background-color: #7A775D;
            color: white;
        }

        .link-crear {
            display: inline-block;
            margin-top: 15px;
            color: #BCA119;
            text-decoration: none;
            font-size: 14px;
        }

        .link-crear:hover {
            text-decoration: underline;
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
            <li><a href="contactenos.php">Contactenos</a></li>
        </ul>
    </nav>
</header>

<div class="contenedor">
    <a class="btn-admin" href="ins.php">Ingresa como administrador</a>
    <h2>Inicia sesión en BarberStyle.Club</h2>
    <form method="POST" action="validar2.php">
        <input class="controls" type="email" name="Email" placeholder="Escriba su email" required>
        <input class="controls" type="password" name="Clave" placeholder="Escriba su clave" required>
        <input type="submit" class="boton" name="Enviar" value="Ingresar">
    </form>
    <a class="link-crear" href="registrarse.php">¿No tienes cuenta? Crear ahora</a>
</div>

<footer>
    © 2023 www.barberstyle.club - Barber Style
</footer>

</body>
</html>
