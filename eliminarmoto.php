<?php

$bd = new SqLite3("base.bd");
$codigo= $_GET['id'];

$usus = $bd-> exec(" DELETE FROM  moto WHERE id = $codigo  ");

if ($usus ){
	echo "Eliminado correctamente.";
} else {
	echo "Error al eliminar";
}

 ?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="moto.php">Volver a atras</a></button>