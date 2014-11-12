<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="guardarmoto.php" method="POST">
 <h1>crear moto  nuevo </h1>
 	<label>MOTO</label>
 	<input type="text" name="moto">
 	<br />
 	<label>MODELO</label>
 	<input type="text" name="modelo">
 
 	<br/>
 	<label>PRECIO</label>
 	<input type="text" name="precio">
 	<br/>
 
 	<input type="text" name="imagen">
 	 <form method="post" action="guardarvehiculo.php" enctype="multipart/form-data">
Nombre: <input type="text" name="nombre" maxlength="100"><br>
Imagen: <input type="file" name="imagen" size="40"><br>


 	<br/>
 	

 	<input type="submit" value="actualizar">
 	
 	<br /> <br />
 </form>
 
 </body>
 </html>  