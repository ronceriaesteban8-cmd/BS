<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
	<link rel="icon" href="img/barberlogo.png">
	<title></title>
</head>
<body>

	 <header>
		
		<nav>
			<img src="img/barberlogo.png" style="width: 75px; height: 75px; text-align: left;">
			<ul> 
				<li><a href="index.php" style="color: #BCA119 ;">BarberStyle.club</a></li>
				
				<li><a href="registrarse.php">Registrarse</a></li>
				<li><a href="inicios.php">Iniciar sesión</a></li>
				<li><a href="somos.php">Quienes somos</a></li>
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

	


</body>
</html>