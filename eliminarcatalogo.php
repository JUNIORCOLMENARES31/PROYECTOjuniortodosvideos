<?php

$bd = new SqLite3("base.bd");
$codigo= $_GET['id'];

$usus = $bd-> exec(" DELETE FROM  catalogo WHERE id = $codigo  ");

if ($usus ){
	echo "Eliminado correctamente.";
} else {
	echo "Error al eliminar";
}

 ?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="catalogo.php">Volver a atras</a></button>