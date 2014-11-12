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
$usu = $bd->query("SELECT * FROM catalogo WHERE ID= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizarcatalogo.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>VEHICULO</label>
 	<input type="text" name="carro" value="<?php echo $row['carro']; ?>">
 	<br />
 	<label>MOTO</label>
 	<input type="text" name="moto"value="<?php echo $row['moto']; ?>">
 	
 	<br/>
 	<label>CARRO PESADO O DE TRANSPORTE</label>
 	<input type="text" name="carropesado" value="<?php echo $row['carropesado']; ?>">
 	<input type="submit" value="actualizar">
 	<br/>
 

 </form>
 
 </body>
 </html>  