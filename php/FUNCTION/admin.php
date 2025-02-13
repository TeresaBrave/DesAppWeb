<?php $titulo='Birray'?>
<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>

<!-- FORMULARIO  en el que recogemos los datos de la ceerveza-->
<form action="admin.php" method="get">
<label>Nombre:<input type="text" name="nombre"></label>
<label>Pais:<input type="text" name="pais"></label>
<label>Tipo:<input type="text" name="tipo"></label>
<label>Alcohol:<input type="number" name="alcohol"></label>
<input type="submit" value="Enviar">

</form>

<?php

//1ºCargar datos que recogemos en los inputs
$nombre=$_GET['nombre']; //contenido sin revisar, se podría meter codigo malicioso

//------------------->SANINTIZAR<-------------------
if ($nombre !== strip_tags($nombre)){
    echo "<h2>No se puede insertar fragmento de código</h2>";
    
    // Sanitizar el nombre para evitar inyección de código
    $nombre = htmlspecialchars($_GET['nombre'], ENT_QUOTES, 'UTF-8');
}

echo $nombre;

// 2ºCargar datos del JSON y convertirlo en array php
$miArray=cargarJSON('assets/datos/cervezas.json');


//3ºAñadir  al array php los datos recogidos
$miArray['cervezas'][]=array('nombre'=>$nombre);
debugPrint_r($miArray);

//4ºConvertir el array php en JSON
$miJSON=json_encode($miArray, JSON_PRETTY_PRINT| JSON_UNESCAPED_UNICODE| JSON_UNESCAPED_SLASHES);

//5º Guardar el JSON en el archivo
file_put_contents('assets/datos/cervezas.json',$miJSON);
?>

<?php include_once 'bloques/_footer.php' ?> 

