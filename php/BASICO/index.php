<?php

//1º las variables con $
$nombre="Pedro";
$apellidos="Lopez García";
$nombreCompleto=$nombre." ".$apellidos;
$nacimiento=1977;
$actulYear=date('Y');
$edad = $actulYear - $nacimiento;

//2º creo una variable que incluya las otras concatenadas
$miTexto ='<p>Hola '.$nombre.' '.$apellidos.'. Tienes una dedad de '.$edad.' años. (o al menos este año has cumplido o cumplirás'.$edad.')</p>';

//3º ECHO=obligatorio=>para que te escriba el texto
echo $miTexto;

?>