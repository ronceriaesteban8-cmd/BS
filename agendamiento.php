<!DOCTYPE html>
<html>
<head>
	<title>AGENDAMIENTO</title>
	<link rel="stylesheet" href="estilosA.css">
	<?php
     $con=mysqli_connect("localhost","root","","bd_barberstyle") or die ("Error de conexión");
    ?> 
</head>
<body>

<div class="form" style="">
    
    <br>
	<h1 style="margin-top: 20px; color: white;">Confirmación de tu cita!!</h1>

	
    
    <img src="img/logob.jpg" style="width: 320px; height: 235px;  ">
    
    <br><br>
    <center>
    <div class= confor> 
   
    <br>   
    <label style="color: ;" >Día</label>
    <input type="text" name="dia">

    <br><br>   
    <label style="color: ;" >Hora</label>
    <input type="text" name="Hora">

    <br><br>   
    <label style="color: ;" >Correo</label>
    <input type="email" name="Email">
    
    </div>	
    </center>
    
    <center>
    	<div style="margin-right: px; margin-top: 22px;">
    <img style="width: 400px; height: 135px;  border-radius: 10px;  " src="img/pay.png">
        </div>   
    </center>
    <br>
    

	<input type="submit" name="Enviar" style="background-color: white; border: white; width: 100px; height: 25px; cursor: pointer; font-family: Century Gothic; " value="Enviar"><br>

</div>

</body>

<style>
	.form
{
	height: 810px;
	width: 550px;
	background-color: black;
	border-radius: 10px;
	margin-top: 60px;
	margin-left: 1150px;
	text-align: center; 

}

.confor
{
	height: 180px;
	width: 380px;
	background-color: white;
	border-radius:8px; 





}

</style>

</html>