<!DOCTYPE html>
<html>
<head>
	<title>usuarios system</title>
</head>
<body>

<style type="text/css"> 
<!-- 
body { cursor: crosshair} 
--> 
</style> 


<?php 
$bd = new SQLite3('base.bd');
$usus = $bd->query("SELECT * FROM tbusuarios;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>BIENVENIDOS A LOS USUARIOS	</h1>


<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Apellido</td>
		
		<td>Vehiculo</td>
		<td>Editar</td>
		
	</tr>
<?php
while ($fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['nombre'] ;?></td>
	<td> <?php  echo $fila['apellido'];?></td>
	<td> <?php  echo $fila['vehiculo'];?></td>
	<td>
		<a href="editarusus.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="eliminarusus.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

	</td>
</tr>
<?php  
}
?>
</table>

<script type="text/javascript"src="jquery.js"></script>
<script type="text/javascript">


 	$(document).on('ready', function() {

 		$('.eliminarUsu').on('click', function(){
 			if (!confirm('seguro que desea eliminar?'))
 				return false;
 		})
 	})
 	</script>
 	<button><a href="crearusus.php"> Crear usuario nuevo </a></button>
  

 
 <button><a href="index.html">Volver a la pagina principal</a></button>
 

</body>
</html>