<?php

$bd = new SQLite3("base.bd");
$nom=$_POST['nombre'];

$ape=$_POST['apellido'];


$veh=$_POST['vehiculo'];

$result=$bd-> exec ("INSERT INTO tbusuarios (nombre , apellido , vehiculo) VALUES('$nom','$ape','$veh')");
if($result) {
	echo "Usuarios".$nom."crado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="compradores.php">Volver a atras</a></button>