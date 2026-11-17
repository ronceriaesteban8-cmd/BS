<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos_u.css">
    <link rel="icon" href="img/barberlogo.png">
    <title>Barber Style</title>
</head>
<body>

    </div>

    <header>
        <nav>
            <ul> 
                <li><a href="index.php" style="color: #BCA119 ;">BarberStyle.club</a></li>
                <li><a href="inicios.php">Cerrar Sesión</a></li>
                <li><a href="contactenos.php">Contactenos</a></li>  
            </ul>
        </nav>
    </header>

    <section class="zona1">
    </section>
    <script type="text/javascript">
        window.addEventListener("scroll", function (){
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY>0);
        })
    </script>
    <br><br><br><br><br><br><br><br>
    <center>
        <h2 style="background-color: white;border-radius: 20px;font-family: arial; color: #313227;font-size: 30px; height: 45px; margin-left: 185px; margin-right: 155px;">Servicios y productos BS.Club</h2>
        <div class="contenedor">
<?php
    $con=mysqli_connect("localhost","root","","bd_barberstyle") or die ("Error de conexión");
    $consulta="SELECT * FROM servicios";
    $ejecutar=mysqli_query($con, $consulta);
    while ($fila=mysqli_fetch_array($ejecutar))
    { 
        $servico = $fila['servicio'];
        $img = $fila['img']; 
        $duracion = $fila['duracion'];
        $precio = $fila['precio'];
?>
    <div>
        <img src="<?php echo $img; ?>" alt="Imagen del servicio <?php echo htmlspecialchars($servico); ?>">
        <div class="descripcion">
            <h2><?php echo htmlspecialchars($servico); ?></h2>
            <h3>
                Duración: <?php echo htmlspecialchars($duracion); ?><br>
                Precio: <?php echo htmlspecialchars($precio); ?>
            </h3>
            <button id="btnav" role="link" onclick="location='procesar_reserva.php'">Reservar ahora</button>
        </div>
    </div>
<?php
    }
?>
</div>

        <div class="cns">
        <center>
            <h1 style="font-size: 120px; font-family: Century Gothic; color: white; margin-left: 20px;">PEINADOS PARA HOMBRES: TENDENCIAS DE ACUERDO CON LA FORMA DE TU CARA</h1>

            <span style="color: white; font-size: 37px; font-family: Century Gothic; background-color: black; ">¿Sabías que la forma de tu rostro y la manera de como llevas tu cabello puede hacerte ver más atractivo? Es probable que desconozcas cuáles son los peinados para hombres más indicados para ti. 

            En este sentido, tenemos diferentes tipos de rostro según su forma. A continuación, te explicaremos cuáles son y las tendencias o estilos en peinados para hombres. Estas recomendaciones son teniendo en cuenta la forma de tu cara, la ocasión y los productos que puedes usar para moldearlos y que duren más. 

            Sigue leyendo e identifica la forma de tu rostro y cuál es tu peinado ideal.</span><br><br><br><br><br><br>

            <img src="img/cor.png" style="width: 1000px; height: 700px; border-radius: 10px; object-fit: cover; display: block;"><br><br><br><br><br><br>

            <h1 style="font-size: 50px; font-family: Century Gothic; color: white; margin-left: 20px;">PEINADOS PARA HOMBRES SEGÚN LA FORMA DEL ROSTRO</h1><br><br><br>

            <span style="color: white; font-size: 37px; font-family: Century Gothic; margin-left: 25px; "> En primer lugar, debes saber qué clase de rostro tienes, para eso pon todo tu pelo hacia atrás; que no quede nada sobre tu cara, mírate en el espejo y examina las líneas de tu cara. Compáralas con las siguientes imágenes:</span><br><br><br>

            <img src="img/cor2.png" style="width: 1400px; height: 400px; border-radius: 10px; object-fit: cover; display: block;"><br><br><br><br><br>

            <h1 style="color: white; font-size: 60px; font-family: Century Gothic;">ROSTRO OVALADO</h1>

            <div style="width: 60%; bbackdrop-filter: blur(0.4rem); ">
                <span style="color: white; font-size: 37px; font-family: Century Gothic;   "> Es un modelo de cara bien proporcionada, tiene la característica de unos pómulos grandes y un mentón más angosto que la frente. Lo bueno es que la gran mayoría de los cortes de pelo le quedan bien</span><br><br><br>
            </div>

            <h1 style="color: white; font-size: 60px; font-family: Century Gothic;">ROSTRO RECTANGULAR</h1>

            <div style="width: 60%; backdrop-filter: blur(0.4rem); ">
                <span style="color: white; font-size: 37px; font-family: Century Gothic;   "> EEs parecido al alargado, pero sus rasgos no son redondeados sino en ángulos. También se asemeja con el cuadrado, ya que sólo los separan algunas diferencias. El corte ideal es el que disimula el ancho de la cara, dándole volumen al cabello.</span><br><br><br>
            </div>

            <h1 style="color: white; font-size: 60px; font-family: Century Gothic;">ROSTRO REDONDEADO</h1>

            <div style="width: 60%; backdrop-filter: blur(0.4rem); ">
                <span style="color: white; font-size: 37px; font-family: Century Gothic;   "> Como su nombre lo indica, es la cara redondeada o en forma circular. El corte que más le favorece es el que disimula esta redondez; como los peinados para hombres que dan volumen a la parte superior del rostro, por ejemplo, las medias melenas</span><br><br><br>
            </div>

            <h1 style="color: white; font-size: 60px; font-family: Century Gothic;">ROSTRO CUADRADO</h1>

            <div style="width: 60%; backdrop-filter: blur(0.4rem); ">
                <span style="color: white; font-size: 37px; font-family: Century Gothic;   "> Es de frente amplia y mentón muy marcado. A los hombres con este rostro les conviene suavizar las facciones con peinados que le den volumen a la parte superior de la cabeza: pelo corto o rapado.</span><br><br><br>
            </div>

            <h1 style="color: white; font-size: 60px; font-family: Century Gothic;">ROSTRO TRIANGULAR</h1>

            <div style="width: 60%; backdrop-filter: blur(0.4rem); ">
                <span style="color: white; font-size: 37px; font-family: Century Gothic;   "> En este tipo de rostro la frente es más amplia que los pómulos. Por tanto, sugerimos evitar los peinados con el pelo demasiado corto. Se recomienda disimular el mentón con aquellos peinados para hombres que resaltan la parte superior del rostro y las orejas.</span><br><br><br><br><br><br><br>

                <img src="img/cor3.jpg" style="width: 1000px; height: 700px; object-fit: cover; display: block;"><br><br><br><br><br><br>
            </div>

            <h1 style="color: white; font-size: 90px; font-family: Century Gothic;">PARA PELO CORTO:</h1><br><br>

            <div style="display: flex; width: 100%; background-color: blue; height: 500px;">
                <div style="height: 500px; width: 500px; background-color: green; overflow: hidden;"> 
                    <img src="img/buz.png" style="width: 100%; height: 100%; object-fit: cover; display: block;"> 
                </div>
                <div style="height: 500px; width: 500px; background-color: black; overflow: hidden;"> 
                    <img src="img/mil.png" style="width: 100%; height: 100%; object-fit: cover; display: block;"> 
                </div>
                <div style="height: 500px; width: 500px; background-color: red; overflow: hidden;"> 
                    <img src="img/es.png" style="width: 100%; height: 100%; object-fit: cover; display: block;"> 
                </div>
                <div style="height: 500px; width: 520px; background-color: pink; overflow: hidden;"> 
                    <img src="img/hii.png" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
            </div>

            <h1 style="color: white; font-size: 90px; font-family: Century Gothic;">PARA PELO MEDIO:</h1><br><br>

            <div style="display: flex; width: 100%; background-color: blue; height: 500px;">
                <div style="height: 500px; width: 500px; background-color: green; overflow: hidden;"> 
                    <img src="img/mid.png" style="width: 100%; height: 100%; object-fit: cover; display: block;"> 
                </div>
                <div style="height: 500px; width: 500px; background-color: black; overflow: hidden;"> 
                    <img src="img/mo.png" style="width: 100%; height: 100%; object-fit: cover; display: block;"> 
                </div>
                <div style="height: 500px; width: 500px; background-color: red; overflow: hidden;"> 
                    <img src="img/a.png" style="width: 100%; height: 100%; object-fit: cover; display: block;"> 
                </div>
                <div style="height: 500px; width: 520px; background-color: pink; overflow: hidden;"> 
                    <img src="img/fa.png" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
            </div>
        </center>         
        </div>
    </center>

    ><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>  
    <footer >
        <span>
            <br>© 2023 www.barberstyle.club - <br>
            Barber Style
        </span>
    </footer>
</body>
<style>
    body
    {
        height: 2300px;
        background-image: url("img/fondo_i.png");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        margin: 0;
        padding: 0;
    }
    footer
    {
        width: 100%;
        height: 80px;
        background-color: black;
        color: white;
        font-family: calibri light;
        text-align: center;
        position: relative;
        margin-top: 305px;
    }
   
    .cns
    {
        backdrop-filter: blur(0.7rem);
        width: 100%;
        height: 10000px;
    }
    .contenedor {
        width: 80%;
        background-color: transparent;
        display: flex;
        padding: 10px;
        justify-content: center;
        flex-flow: row wrap;
    }
    .contenedor > div {
        text-align: center;
        backdrop-filter: blur(0.4rem);
        height: 430px;
        width: 280px;
        border-radius: 12px;
        margin: 15px 30px;
        padding: 0;
        border: 2px solid white;
        background-color: rgba(0,0,0,0.5);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .contenedor > div:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.6);
    }
    .contenedor img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        flex-shrink: 0;
    }
    .descripcion {
        padding: 15px 20px;
        color: white;
        font-family: 'Helvetica', Arial, sans-serif;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .descripcion h2 {
        font-size: 22px;
        margin: 10px 0 8px 0;
        color: #BCA119;
    }
    .descripcion h3 {
        font-size: 14px;
        margin: 0 0 15px 0;
        line-height: 1.3;
    }
    #btnav {
        background-color: #BCA119;
        border: none;
        padding: 10px 18px;
        color: #222;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        font-family: Arial, sans-serif;
        transition: background-color 0.3s ease;
        align-self: center;
        width: 90%;
        box-shadow: 0 2px 8px rgba(186,161,25,0.6);
    }
    #btnav:hover {
        background-color: #8a7910;
        color: white;
    }
</style>
</html>
