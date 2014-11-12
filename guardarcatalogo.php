<?php

$bd = new SQLite3("base.bd");








$nom=$_POST['carro'];

$ape=$_POST['moto'];



$veh=$_POST['carropesado'];



$result = $bd-> exec ("INSERT INTO catalogo ( carro , moto , carropesado ) VALUES('$nom','$ape','$veh')");
if($result) {
	echo "vehiculo".$ape."crado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $ape; 
}


?>



 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="catalogo.php">Volver a atras</a></button>