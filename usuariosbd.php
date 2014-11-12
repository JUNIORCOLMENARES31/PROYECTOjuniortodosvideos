<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$bd= new SQLite3("base.bd")
$usus = $bd->query("SELECT * FROM  tbusus;");


?> 
<h1>bienvenidos </h1>
<table border="1px"></table>
<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Vehiculos</td>
		<td>Editar</td>
	</tr>
<?php 
while ($fila = $usus -> fetchArray()) {
	?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['nombre']; ?></td>
		<td><?php echo $fila['apellido']; ?></td>
		<td><?php echo $fila['editar']; ?></td>
		<td> 
		<a href="editarusus.php?id=<?php echo $fila['id']; ?>"> Editar</a>
		 <a href="eliminarusus.php?id=<?php echo $fila['id']; ?>">Eliminar</a> 
		 </td>
	</tr>
	<?php
}
?>

<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		
		<td>Vehiculo</td>
	</tr>
</body>
</html>