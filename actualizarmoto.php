<?php

$bd = new SQLite3("base.bd") ;
$id = $_POST['id'];
$nombre = $_POST['moto'];
$apellido = $_POST['modelo'];

$vehiculo = $_POST['precio'];
$imagen = $_POST['imagen'];


$consulta = 'UPDATE moto SET moto ="'.$nombre.'", modelo ="'.$apellido.'", precio ="'.$vehiculo.'", imagen ="'.$imagen.'" WHERE  id="'.$id.'";';

$result = $bd-> exec ($consulta);
//echo  $id. "_________". $consulta;

if($result){
	echo $nombre ."Fue modificado satisfactoriamente.";

}else {
	echo "error al modificar". $nombre;
}

?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="moto.php">Volver a atras</a></button>
