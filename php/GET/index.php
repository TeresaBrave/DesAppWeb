<!DOCTYPE html>
<html>
<body>

<?php


$nombre="Pedro";
$apellidos="Lopez García";
$nombreCompleto=$nombre." ".$apellidos;
$nacimiento=1977;
$actulYear=date('Y');
$edad = $actulYear - $nacimiento;




$miTexto ='<p>Hola '.$nombre.' '.$apellidos.'. Tienes una dedad de '.$edad.' años. (o al menos este año has cumplido o cumplirás'.$edad.')</p>';


echo $miTexto;

?>