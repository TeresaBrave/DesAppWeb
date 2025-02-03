<?php

//VARIABLE

 $nombre = "Juan";
 $apellido='García';
 $lugar='Gijón';
 $nacimiento=1991;
 $actualyear=date('Y');
 $edad = $actualyear - $nacimiento;

 $texto='Eres '.$nombre.' '.$apellido.', de '.$lugar.' con '.(2025-$nacimiento).' años';
 $texto= "Eres $nombre $apellido de $lugar con $edad años";

echo $texto;

?>
________________________________________________________________________________

<?php

$datos =[ //ARRAY DECLARATIVO 
	'nombre' 	=> 'Juan',
	'apellido'	=> 'García',
	'lugar'		=> 'Gijón',
	'nacim'		=>  1991
];

$edad = date('Y') - $datos['nacim'];

$texto ="Eres ".$datos['nombre'];
$texto="Eres {$datos['nombre']} {$datos['apellido']} de {$datos['lugar']} y tienes $edad";

echo $texto;

?>

_______________________________________________________________________________________
<?php

$alumnos = ["Juan",
            "Ana", 
            "Carlos", 
            "Maria"];

$cursos = ["Matemáticas", 
           "Física", 
           "Historia", 
           "Química"];

$texto=$alumnos[rand(0,count($alumnos)-1)]." va al curso de ".$cursos[rand(0,count($cursos)-1)];


echo $texto;

?>