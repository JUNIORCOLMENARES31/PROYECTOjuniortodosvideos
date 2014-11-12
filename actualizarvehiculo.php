<?php

$bd = new SQLite3("base.bd") ;

$id = $_POST['id'];

$nombre = $_POST['vehiculos'];
$apellido = $_POST['modelo'];

$vehiculo = $_POST['precio'];

$consulta = 'UPDATE vehiculo SET vehiculos ="'.$nombre.'", modelo ="'.$apellido.'", precio ="'.$vehiculo.'" WHERE  id="'.$id.'";';

$result = $bd-> exec ($consulta);
//echo  $id. "_________". $consulta;

if($result){
	echo $nombre ."Fue modificado satisfactoriamente.";

}else {
	echo "error al modificar". $nombre;
}

?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="vehiculos.php">Volver a atras</a></button>
