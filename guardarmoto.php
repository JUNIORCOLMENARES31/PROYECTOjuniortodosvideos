<?php

$bd = new SQLite3("base.bd");
$nom=$_POST['moto'];

$ape=$_POST['modelo'];


$veh=$_POST['precio'];

$ima=$_POST['imagen'];

$result=$bd-> exec ("INSERT INTO moto (moto , modelo , precio , imagen) VALUES('$nom','$ape','$veh','$ima')");
if($result) {
	echo "moto".$nom."crado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $nom; 
}


?>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="moto.php">Volver a atras</a></button>