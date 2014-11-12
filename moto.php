<!DOCTYPE html>
<html>
<head>
	<title>motos</title>
</head>
<body>

<style type="text/css"> 
<!-- 
body { cursor: crosshair} 
--> 
</style> 


<?php 
$bd = new SQLite3('base.bd');
$usus = $bd->query("SELECT * FROM moto;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>BIENVENIDOS A LAS MOTOS	</h1>


<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>MOTO</td>
		<td>MODELO</td>
		
		<td>PRECIO</td> 
		<td>IMAGEN</td>
		<td>EDITAR</td>
		
	</tr>
<?php
while ($fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['moto'] ;?></td>
	<td> <?php  echo $fila['modelo'];?></td>
	<td> <?php  echo $fila['precio'];?></td>
	<td> <?php  echo $fila['imagen'];?></td>
	

	<td>
		<a href="editarmotos.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarmoto" href="eliminarMOTO.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

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
 			if (!confirm('SEQURO QUE DESEAS ELIMINAR ESTA MOTO?'))
 				return false;
 		})
 	})
 	</script>
 	<button><a href="crearMOTO.php"> Crear nuevo vehiculo </a></button>
  
   	<button><a href="index.html">Volver a la pagina principal</a></button>
 

 

</body>
</html>