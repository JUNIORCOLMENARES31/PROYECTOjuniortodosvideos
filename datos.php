<!DOCTYPE html>
<html>
<head>
	<title>pagina</title>
</head>
<body>

<h1>Bienvenidos a nuestra pagina</h1>

<?php

$datos = array(
	'0' => array(
		'nombre' => 'efrain',
		'apellido' => 'colmenares',
		'notas' => array(
			'0'=>'100',
			'1'=>'99',
			'2'=>'100'
		)

		),
	'1' => array(
		'nombre' => 'sebastian',
		'apellido' => 'calderon',
		'notas' => array(
			'0'=>'89',
			'1'=>'97',
			'2'=>'82'
		)
		), 
	'2' => array(
		'nombre' => 'brandon',
		
		'apellido' => 'sandoval',
		'notas' => array(
			'0'=>'87',
			'1'=>'98',
			'2'=>'78'
		)
		), 
	);

?>

<table border="1px">
	<tr>
		<td>No</td>
		<td>Nombre</td>
		<td>Apellido</td>
	</tr>
	<?php
	for ($i=0;$i < count($datos); $i++) { 
	?>
	<tr>
		<td><?php echo $i+1; ?></td>
		<td><?php echo $datos[$i]['nombre']; ?></td>
		<td><?php echo $datos[$i]['apellido']; ?></td>
		<td> 
			<ul>
				<?php
				for ($j=0; $j < count($datos[$i]['notas']); $j++) { 
				
				?>
				<li><?php echo $datos[$i]['notas'][$j]; ?></li>

				}
			
			</ul>
		</td>
	</tr>
	<?php
	}
	?>
?>
</table>
</body>

</