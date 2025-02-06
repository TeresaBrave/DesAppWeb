<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Abrir y guardar JSON</h1>

<?php 

$archivo='organos.json'; // Aqui esta  el archivo a cargar
//verificamos si el archivo existe
if(file_exists($archivo)){
    $importar= file_get_contents($archivo); //Cargamos el archivo
    $miArray=json_decode($importar,true); //convierte el JSON en array de PHP
}


echo "<pre>";
print_r($miArray);
echo "</pre>";



</body>
</html>