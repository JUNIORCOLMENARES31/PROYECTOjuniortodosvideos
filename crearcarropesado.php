 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="guardarcarropesado.php" method="POST">
 <h1>crear usuario  nuevo </h1>
 	<label>Vehiculo</label>
 	<input type="text" name="carrospesados">
 	<br />
 	<label>Modelo</label>
 	<input type="text" name="modelo">
 
 	<br/>
 	<label>Precio</label>
 	<input type="text" name="precio">
 	<br/>
 	<br/>
 	
 	<input type="text" name="imagen">
 	 <form method="post" action="guardarcarropesado.php" enctype="multipart/form-data">
Imagen: <input type="file" name="imagen" size="40"><br>


 	<br/>

 	<input type="submit" value="actualizar">
 	
 	<br /> <br />
 </form>
 
 </body>
 </html>  
 
</form>
