<?php

$bd = new SQLite3("base.bd");



$imagen =$_POST['imagen'];


$nombre =$_POST['nombre'];

$nom=$_POST['vehiculos'];

$ape=$_POST['modelo'];



$veh=$_POST['precio'];

$imagen =$_POST['imagen'];





$result = $bd-> exec ("INSERT INTO vehiculo ( vehiculos , modelo , precio , imagen ) VALUES('$nom','$ape','$veh','$imagen')");
if($result) {
	echo "vehiculo".$imagen."crado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $imagen; 
}


?>

<img src="vehiculo.php?nombre=nombre_de_la_imagen">
<a href="vehiculo.php?nombre=<?php echo $nombre ?>">aquí</a>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="vehiculos.php">Volver a atras</a></button>