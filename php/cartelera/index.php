<h1>Peliculas</h1>

<?php

$archivo='cartelera.json'; //1º hay que definir la variable FUERA

if(file_exists($archivo)){

$miJSON=file_get_contents($archivo);

$listaPeliculas=json_decode($miJSON,true);

}

else{
    echo "No se ha podido cargar el archivo $archivo";
    }
    
    if(isset($listaPeliculas)){
        echo '<ul class="cartelera">';
        //Foreach($variable ultima[nombre array]   as    $cada "arraycito")
        foreach($listaPeliculas['peliCartelera'] as $pelicula){
            echo "
            <li>
                <img src='{$pelicula['cartel']}' alt='Película {$pelicula['titulo']} dirigida por {$pelicula['director']} '>
                <h2>{$pelicula['titulo']}</h2>
                <p>{$pelicula['director']}</p>
            </li>";
        }
        echo '</ul>';
        }
    




?>



<style>

    html{
        font-family: sans-serif;
    }
    .cartelera{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        list-style: none;
        padding: 0;
    }

    .cartelera li{
        margin: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
        width: 300px;
    }

    .cartelera img{
        width: 100%;
        height: auto;
    }
    /*  los titulos de las peliculas en mayusculas */

</style>

