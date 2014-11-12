<!DOCTYPE html>
 <html>
 <head>
 	<title> Modificar usuario </title>
 </head>
 <body>
 <h1>Modificar usuario</h1>
 <?php
 $id =  $_GET['id'];

$bd = new SQLite3("base.bd");
$usu = $bd->query("SELECT * FROM tbusuarios WHERE id= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizarusus.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>Nombre</label>
 	<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
 	<br />
 	<label>Apellido</label>
 	<input type="text" name="apellido"value="<?php echo $row['apellido']; ?>">
 	
 	<br/>
 	<label>Vehiculo</label>
 	<input type="text" name="vehiculo" value="<?php echo $row['vehiculo']; ?>">
 	<input type="submit" value="actualizar">
 	<br/>
 </form>
 
 </body>
 </html>  