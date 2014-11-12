<?php

$bd = new SQLite3("base.bd") ;
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$vehiculo = $_POST['vehiculo'];

$consulta = 'UPDATE tbusuarios SET nombre ="'.$nombre.'", apellido ="'.$apellido.'", vehiculo ="'.$vehiculo.'" WHERE  id="'.$id.'";';

$result = $bd-> exec ($consulta);
//echo  $id. "_________". $consulta;

if($result){
	echo $nombre ."Fue modificado satisfactoriamente.";

}else {
	echo "error al modificar". $nombre;
}

?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="compradores.php">Volver a atras</a></button>
