<?php

$bd = new SQLite3("base.bd") ;

$id = $_POST['id'];

$nombre = $_POST['carro'];
$apellido = $_POST['moto'];

$vehiculo = $_POST['carropesado'];

$consulta = 'UPDATE catalogo SET carro ="'.$nombre.'", moto ="'.$apellido.'", carropesado ="'.$vehiculo.'" WHERE  id="'.$id.'";';

$result = $bd-> exec ($consulta);
//echo  $id. "_________". $consulta;

if($result){
	echo $nombre ."Fue modificado satisfactoriamente.";

}else {
	echo "error al modificar". $nombre;
}

?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="catalogo.php">Volver a atras</a></button>
