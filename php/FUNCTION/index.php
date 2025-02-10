<?php $titulo='Birray'?>
<?php require 'bloques/_config.php' ?>
<?php include_once 'bloques/_header.php' ?>
<?php include_once 'bloques/_footer.php' ?>  


<?php



$ruta= 'assets/datos/cervezas.json';

//LLamamos a la funcion
debugPrint_r(cargarJSON($ruta));

$miArray=cargarJSON($ruta);
echo '<ul>';
foreach($miArray['cervezas'] as $miCerveza){
    echo "<li>
    <h2>{$miCerveza['nombre']}</h2>
    <p>{$miCerveza['pais']}</p>  
    <p>{$miCerveza['tipo']}</p>
    <p>{$miCerveza['alcohol']}</p>  
    </li>";
}
echo '</ul>';

?>

 
