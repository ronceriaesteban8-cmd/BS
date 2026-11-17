<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="estilos.css">
	<link rel="icon" href="img/barberlogo.png">
        

	<title>Barber Style</title>
</head>
<body>

	 <header class="h">
		
		<nav>
			<ul> 
				<li><a href="index.php" style="color: #BCA119 ;">BarberStyle.club</a></li>
				
				<li><a href="inicios.php">Login</a></li>
				
				
				<li><a href="contactenos.php">Contactenos</a></li>	
			</ul>
		</nav>
	</header>
	
<section>

    
   	
    
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <center>
   <div style="width:100%; height: 60px; margin-top: 700px; margin-right: " >
   	<p style="font-family: Century Gothic; font-size:50px; color: #5A594C; background-color: #D4D3CB; ">¿Qué es Barber Style?</p>
   </div>
 </center>
   <div class="qb" style="background-color: #D4D3CB; ">
     
      <center>
     <div id="somos" >
       <p style="color: white; font-size:33px;font-family: Century Gothic ; ">Somos una de las mejores tiendas de servicios 
     	y/o productos dedicada al cuidado de la belleza
      sea masculina o femenina.
       Ofreciendo una gran altísima calidad de servicios y productos
        así genrando la mejor experiencia posible </p>
     	
     </div>
     </center>
     <center>
     <div id="somos2">
     <img style="width: 100%; height: 100%; " src="img/img2.jpg">
   </div>
   </center>
    	
   </div>


 
   <div class="tit2" style="backdrop-filter: blur(0.4rem); color: white;">
   	<p style="font-size:40px; font-family:  FoundersGrotesk; backdrop-filter: blur(0.4rem); ">LA GALERIA DE NUESTROS CLIENTES MAS EXCLUSIVOS</p>
   </div>

   <div class="ola">

   <div class="imgs" style="background-color: transparent; height: 960px;"  >
     
    <?php
     $con=mysqli_connect("localhost","root","","bd_barberstyle") or die ("Error de conexión");
     $consulta="SELECT * FROM galeria";
     $ejecutar=mysqli_query($con, $consulta);
     $i=0;
     while ($fila=mysqli_fetch_array($ejecutar))
     { 
      
      $imagen=$fila['imagen'];
      $i++;
      ?>

    <div class="m" style="background-color: ; width: 425px;height: 420px; margin-left: 20px; margin-top: 10px; border-radius: 5px">
       <br>
             <img style="width:100% ; height: 100%; border-radius: 8px; " src="<?php echo $imagen; ?>">
           
      </div>  
      <?php
     }
     ?>
   
   	
   
   </div>
     
    <div class="cita" style="background-color:  #D4D3CB">
    	<img style=" margin-left: 300px;" src="img/barberlogo.png">
    	<div class="ci" style="background-color: #D4D3CB">
  <p style="font-size:35px;margin-top: 110px; background-color: #D4D3CB; font-family: FoundersGrotesk">La mejor optimización y rapidez para adquirir
  tu servicio con la mejor calidad y atención posible</p>
  <center>
  <button id=btnav role="link" onclick="location='inicios.php'">Reservar cita</button>
  </center>
    </div>
    </div>  

   
    
</section>    


	
     <script type="text/javascript">
     	window.addEventListener("scroll", function (){
     		var header = document.querySelector("header");
     		header.classList.toggle("abajo", window.scrollY>0);
     	})
     </script>
     <center>
<div style="background-color:#D4D3CB; width: 80%;  height: 520px; border-radius:10px;">
     <form method="POST" action="enviarcomentario.php">
           
               
                   <center>
                        <div >
                            <h2 style="background-color: black; color: #D4D3CB; width:100%; font-size:30px; font-family:Century Gothic; border-radius: 10px; ">Comentarios</h2>
                           
                            
                               
    
                               
                                    <h3 style=" font-size: 35px; font-family:Century Gothic ;">¡Dejanos un Comentario!</h3>

                                                                  
                                    <label for="nombre" class="form-label"></label>
                                    <input style="font-size:20px " class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre" required >
                                    </div>
                            
                                    
                            <br>
                                    <div class="form-group">
                                    <label for="comentario" class="form-label"></label>
                                    <textarea style="font-size:20px;"  class="form-control" name="comentario" cols="45" rows="10" type="text" id="comentario" required 
                                    placeholder="Escribe tu comentario......"  ></textarea>
                                    </div>
                            <br>
                            <input style=" background-color: black; font-size: 14px; font-family:Century Gothic ; border: none; width: 150px; color: white; height: 30px;" class="btn btn-primary" type="submit"  value="Enviar Comentario">
</div>     
</center>  
</center>            
<br><br><br>         
                                    <?php

$conexion=mysqli_connect("localhost","root","","bd_barberstyle"); 
$resultado= mysqli_query($conexion, 'SELECT * FROM comentarios');

while($comentario = mysqli_fetch_object($resultado)){


    ?>
    <center>
 <div style="background-color: #D4D3CB; width:80%; font-family: calibri; border-radius: 10px; ">
    <b><?php  echo($comentario->nombre);  ?></b>(<?php echo ($comentario->fecha); ?>) dijo: 
    <br />
    <?php echo ($comentario->comentario);?>
    <br />
    <hr />
  </div>
  </center>



    <?php
}

                                    ?>

	
  <br><br><br><br><br><br><br><br><br>
<footer>
	<span>
		<br>© 2023 www.barberstyle.club - <br>
	Barber Style
	</span>
</footer>
</body>
 <style >
    	footer
    	{
    		footer

	width: 100%;
	height: 80px;
	background-color: black;
	color: white;
	font-family: calibri light;
    text-align: center;
    position:relative ;
    margin-top: px;
    	}
    	.tit1
{
	text-align: center;
	margin-top: 510px;
	margin-right: ;
	background-color: transparent;
	opacity: ;
	width: 99%;
	padding: 10px;
	height: 95px;
	border-radius: 15px;

}
   .qb
   {
   	width: 100%;
   	height: 850px;
   	background-color: #D4D3CB;
    display: flex;

   }
   #somos
   {
    align-content: center;
   	background-color: black;
   	width: 350px;
   	height: 600px;
   	margin-left: 137%;
   	margin-top: 155px;
   	padding: 6px;
   }
   #somos2
   {
    background-color: black;
    width: 400px;
    height: 700px;
    margin-top: 105px;
    margin-left: 120%;
    padding: 6px;
   }
   .tit2
   {
   backdrop-filter: blur(0.4rem);
   	width: 100%;
   	height: 80px;
   	text-align: center;
   }
   .imgs
   {
   	background-color: green;
   	width: 100%;
   	height: 1200px;
   	display: flex;

   	flex-flow: row wrap;
   	margin: px;
   }
   .ola{
    background-color: ;
    backdrop-filter: blur(0.4rem);
   }
   .ft
   {
   	background-color: green;
   	
    padding: 5px;
   	margin: 5px ;
   }
   .cita
   {
   	background-color: white;
   	width: 100%;
   	height: 600px;
   	display: flex;
   }
   #btnav
{
	background-color:  #BCA119;
	font-size: 20px;
	border: none;
	padding: 6px;
	height: 70px;
	width: 200px;
	margin-top: 50px;
}
#btnav:hover
    {
    background-color:#BDBDB6;
    color:black ;
    }
   .ci
   {
   	margin-left: 70px;
   	margin-top: 40px;
   	background-color: white;
   	width: 550px;
   	height: 520px;
   }
   ::placeholder {
	color: black;
	font-family:Century Gothic  ;
	font-size: 15px;
  }
  .m
  {
  display: flex;
  background-color: ;
  z-index: 1;  
  border:;
  padding: 10px;
  margin: 10px;
  
  }
    </style>
  
  
</html>