<!DOCTYPE html>
 <html>
 <head>
 	<title> Modificar carro </title>
 </head>
 <body>
 <h1>Modificar carro</h1>
 <?php
 $id =  $_GET['id'];

$bd = new SQLite3("base.bd");
$usu = $bd->query("SELECT * FROM carrop WHERE ID= '$id';");

$row = $usu->fetchArray();
 ?>
 <form  action="actualizarcarropesado.php" method="POST">
 <label>Id:</label><label> <?php echo $id;?></label>
 <br /> <br />

 <input type="hidden" name="id" value="<?php echo $id;?>">
 
 	<label>VEHICULO</label>
 	<input type="text" name="vehiculos" value="<?php echo $row['carrospesados']; ?>">
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
 	 <form method="post" action="guardarcarropesado.php" enctype="multipart/form-data">

Imagen: <input type="file" name="imagen" size="40"><br>

 </form>
 
 </body>
 </html>  