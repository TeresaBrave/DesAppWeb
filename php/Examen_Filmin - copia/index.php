<? require 'bloques/config.php'; ?>
<? include 'bloques/header.php'; ?>

<h1>🎥 Filmlovers </h1>
<p>Explora un catálogo exclusivo de películas inolvidables.</p>


<?php

$archivo ='pelis.json'; // Ruta absoluta basada en el directorio actual


if (file_exists($archivo)) 
{
    $miJSON = file_get_contents($archivo);
    $listaPeliculas = json_decode($miJSON, true);
} 
else { echo "No se ha encontrado el archivo"; } 

       /* echo"<pre>";
        print_r($listaPeliculas);
        echo"</pre>";**/
        
        echo '<ul class="pelis">';
        foreach ($listaPeliculas['peliculas'] as $pelicula) {
            echo "<li>";
            echo "<h2>{$pelicula['titulo']}</h2>";
            echo "<img src='{$pelicula['img']}' alt='{$pelicula['titulo']}'>";
            echo "<p>{$pelicula['director']}</p>";
            echo "<p>{$pelicula['anio']}</p>";
            echo "<p>{$pelicula['sinopsis']}</p>";
            echo "</li>";
        }
        echo '</ul>';
        
        ?>
        

<? include 'bloques/footer.php'; ?>