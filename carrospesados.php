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
$usus = $bd->query("SELECT * FROM carrop;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>BIENVENIDOS A LOS CARROS PESADOS O DE TRANSPORTE</h1>


<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>vehiculos</td>
		<td>Modelo</td>
		
		<td>Precio</td>
		<td>imagen</td>
		<td>Editar</td>
		
	</tr>
<?php
while ($fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['carropesados'] ;?></td>
	<td> <?php  echo $fila['modelo'];?></td>
	<td> <?php  echo $fila['precio'];?></td>
	<td> <?php  echo $fila['imagen'];?></td>
	
	<td>
		<a href="editarcarropesado.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="eliminarcarropesado.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

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
 	<button><a href="crearcarropesado.php"> Crear nuevo vehiculo </a></button>
  
   	<button><a href="index.html">Volver a la pagina principal</a></button>
 

 

</body>
</html>