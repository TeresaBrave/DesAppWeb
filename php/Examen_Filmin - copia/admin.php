<? require 'bloques/config.php'; ?>
<? include 'bloques/header.php'; ?>

<form action="admin.php" method="get">

<input type="text" name="titulo" placeholder="Título">
<input type="text" name="director" placeholder="Director">
<input type="text" name="anio" placeholder="Año">
<input type="text" name="sinopsis" placeholder="Sinopsis">
<input type="text" name="img" placeholder="Imagen">

<input type="submit" value="Añadir">

</form>


<?php

$archivo ='pelis.json'; // Ruta absoluta basada en el directorio actual


if (file_exists($archivo)) 
{
    $miJSON = file_get_contents($archivo);
    $listaPeliculas = json_decode($miJSON, true);

    if(isset($_GET['titulo']) && isset($_GET['director']) && isset($_GET['anio']) && isset($_GET['sinopsis']) && isset($_GET['img']))
    {
        $nuevaPelicula = array(
            'titulo' => $_GET['titulo'],
            'director' => $_GET['director'],
            'anio' => $_GET['anio'],
            'sinopsis' => $_GET['sinopsis'],
            'img' => $_GET['img']
        );

        $listaPeliculas['peliculas'][] = $nuevaPelicula;

        $nuevoJSON = json_encode($listaPeliculas);
        file_put_contents($archivo, $nuevoJSON);
    }

}


 include 'bloques/footer.php'; ?>