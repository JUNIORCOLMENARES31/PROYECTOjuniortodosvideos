<!DOCTYPE html>
 <html>
 <head>
 	<title> Modificar vehiculo </title>
 </head>
 <body>
 <h1>Modificar vehiculo</h1>
 <?php
 $id =  $_GET['id'];

$bd = new SQLite3("base.bd");
$usu = $bd->query("SELECT * FROM vehiculo WHERE ID= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizarvehiculo.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>VEHICULO</label>
 	<input type="text" name="vehiculos" value="<?php echo $row['vehiculos']; ?>">
 	<br />
 	<label>MODELO</label>
 	<input type="text" name="modelo"value="<?php echo $row['modelo']; ?>">
 	
 	<br/>
 	<label>PRECIO</label>
 	<input type="text" name="precio" value="<?php echo $row['precio']; ?>">
 	<input type="submit" value="actualizar">
 	<br/>
 	<label>IMAGEN</label>
 	<input type="text" name="imagen" value="<?php echo $row['imagen']; ?>">
 		<input type="text" name="imagen">
 	 <form method="post" action="guardarmoto.php" enctype="multipart/form-data">
Nombre: <input type="text" name="nombre" maxlength="100"><br>
Imagen: <input type="file" name="imagen" size="40"><br>

 </form>
 
 </body>
 </html>  