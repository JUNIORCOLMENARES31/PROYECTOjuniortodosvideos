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
$usus = $bd->query("SELECT * FROM catalogo;");
//echo "Cantidad " . $usus->numColumns();
?>
<h1>BIENVENIDOS AL CATALOGO	</h1>


<br /> <br />
<table border="1px">
	<tr>
		<td>Id</td>
		<td>vehiculos</td>
		<td>moto/td>
		
		<td>carros pesados o de transporte</td>
		
		<td>Editar</td>
		
	</tr>
<?php
while ($fila = $usus->fetchArray()) {
?> 
<tr>
	<td> <?php  echo $fila['id'] ;?></td>
	<td> <?php  echo $fila['carro'] ;?></td>
	<td> <?php  echo $fila['moto'];?></td>
	<td> <?php  echo $fila['carropesado'];?></td>
	
	
	<td>
		<a href="editarcatalogo.php?id=<?php echo $fila['id']; ?>">Editar</a>
		<a class="eliminarUsu" href="eliminarcatalogo.php?id=<?php echo $fila['id']; ?>">Eliminar</a>

	</td>
</tr>
<?php  
}
?>s


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
 	<button><a href="crearcatalogo.php"> Crear nuevo vehiculo </a></button>
  
   	<button><a href="index.html">Volver a la pagina principal</a></button>
 

 

</body>
</html>