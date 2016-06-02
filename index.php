<html>
<head>
	<title>Enviar datos a traves de un php</title>
</head>
<body>
<!--action pagina a donde se dirige y metodo lo que mostrara-->
	<form action="datos.php" method="POST">
		Nombre:</br>  <input type="text" name="nombre"/><br></br>      

		Apelldo paterno:</br>  <input type="text" name="paterno" /><br></br>  
		
		Apeido materno:</br>  <input type="text" name="materno" /><br></br>  

		Edad:</br>  <input type="text" name="edad" /><br></br>  

		Direccion:</br>  <input type="text" name="direccion" /><br></br>  

		Profesion:</br>  <select name="profesion">
			<option>Selecciona una opcion.............</option>
			<option>Ing. en sistemas computacionales</option>
			<option>Ing. ambiental</option>
			<option>Ing. industrial</option>
			<option>Ing. informatica</option>
			<option>Lic. administracion</option>

		</select>
		</br> </br> 
		
		<input type="submit" value="Enviar" title="Send"/>
	</form>
</body>
</html>