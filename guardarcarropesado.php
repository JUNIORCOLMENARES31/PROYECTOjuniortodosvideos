<?php

$bd = new SQLite3("base.bd");

$car=$_POST['carrospesados'];

$ape=$_POST['modelo'];



$veh=$_POST['precio'];

$imagen =$_POST['imagen'];




$result = $bd-> exec ("INSERT INTO carrop ( carrospesados , modelo , precio , imagen  ) VALUES('$car','$ape','$veh','$imagen')");
if($result) {
	echo "vehiculo".$car."crado satisfatoriamente";
} else {
	echo " No se puedo crear a " . $car; 
}


?>

<img src="carrospesados.php?nombre=nombre_de_la_imagen">
<a href="carrospesados.php?nombre=<?php echo $nombre ?>">aquí</a>
 <button><a href="index.html">Volver a la pagina principal</a></button>
 <button><a href="carrospesados.php">Volver a atras</a></utton>