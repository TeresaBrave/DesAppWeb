
<?php
/*


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
*/
?>
________________________________________________________________________________

<?php
/*
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

*/
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

//rand() es una función en PHP que genera un número aleatorio dentro de un rango específico. 
//count($alumnos) te dice cuántos alumnos hay en el array $alumnos
echo '<ul>';

for ($i = 0;$i<count($alumnos); $i++) {
    //echo "<li>"Alumno $i: " . $alumnos[$i] . " va al Curso de:".$cursos[$i] </li>;
    echo "<li>El Alumno nº$i: {$alumnos[$i]} va al Curso de {$cursos[rand(0,count($cursos)-1)]}</li>";
}

echo '</ul>';

?>
________________________________________________________________________________________________

<?php
$datos=[
//Nombre,  ruta,    Visible/Activo/Inactivo
["Día 1", "/dia1",  1 ],
["Día 2", "/dia2",  1 ],
["Día 3", "/dia3",  0 ],
["JSON", "/JSON",  1 ],
["Dream Trip - Agencia de viajes", "/dreamtrip",  1 ],
["GET", "/get",  0 ],
["Día 7", "/dia7",  0 ]

];

echo "<h1> Índice de archivos PHP</h1>";
echo "<h2> What we do in the classroom</h2>";

/*echo "<ul>"; // Agregamos una lista no ordenada para los enlaces.
for($i = 0; $i < count($datos); $i++) {
    echo "<li><a href='" . $datos[$i][1] . "'>" . $datos[$i][0] . "</a></li>";
}
echo "</ul>";
*/

foreach($datos as  $valor){
echo '<li>Carpeta: <a href="'.$valor[1].'">'.$valor[0].'</a></li>';
}
?>

<style>

    html{
background-color:lightblue;
    }

    body{
        background-color:white;  
    }

    </style>