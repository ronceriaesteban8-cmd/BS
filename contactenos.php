<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilosC.css">
    <link rel="icon" href="img/barberlogo.png">
    <title>BarberStyle</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Bloquea el scroll */
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        header {
            width: 100%;
            height: 50px; /* Más corto */
            background: #222;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        .social-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: flex-start; /* Alinea a la izquierda */
            justify-content: flex-end; /* Los empuja hacia abajo */
            height: calc(100% - 50px); /* Resta la altura del header */
            padding-left: 50px; /* Separación del borde izquierdo */
            padding-bottom: 50px; /* Espacio desde abajo */
        }

        .social-container img {
            width: 150px;
            height: 150px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <ul> 
                <li><a href="index.php" style="color: #BCA119;">BarberStyle.club</a></li>
                <li><a href="inicios.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="social-container">
        <a href="https://www.instagram.com">
            <img src="img/logo.png" alt="Instagram">
        </a>
        <a href="https://www.whatsapp.com">
            <img src="img/what.png" alt="WhatsApp">
        </a>
        <a href="https://www.gmail.com">
            <img src="img/gmail.png" alt="Gmail">
        </a>
    </div>

</body>
</html>
