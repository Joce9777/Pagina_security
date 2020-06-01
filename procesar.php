<?php

$nombre = $_GET['nombre'];
$telefono = $_GET['telefono'];
$calle= $_GET['calle']; 
$colonia= $_GET['colonia'];


echo "<h2> <h2> informacion recibida desde PHP </h2> </h2>";
echo "El nombre recibido es ". $nombre. "<br/>";
echo "El telefono recibido es ". $telefono. "<br/>";
echo "La calle recibida es ". $calle. "<br/>";
echo "La colonia recibida es ". $colonia. "<br/>";

?>