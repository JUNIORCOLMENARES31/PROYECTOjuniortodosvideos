<!DOCTYPE html>
 <html>
 <head>
 	<title> Modificar vehiculo </title>
 </head>
 <body>
 <h1>Modificar moto</h1>
 <?php
 $id =  $_GET['id'];

$bd = new SQLite3("base.bd");
$usu = $bd->query("SELECT * FROM moto WHERE ID= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizarmoto.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>MOTO</label>
 	<input type="text" name="moto" value="<?php echo $row['moto']; ?>">
 	<br />
 	<label>MODELO</label>
 	<input type="text" name="modelo"value="<?php echo $row['modelo']; ?>">
 	
 	<br/>
 	<label>PRECIO</label>
 	<input type="text" name="precio" value="<?php echo $row['precio']; ?>">
 	<input type="submit" value="actualizar">
 	
 	<br/>
 </form>
 
 </body>
 </html>  