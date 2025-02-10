<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<header>
<nav>
            <ul>
                <li><a href="index.php">CARTA</a></li>
                <li><a href="admin.php">ADMIN</a></li>
                
            </ul>
        </nav>

</header>


<main>

<?php

    $archivo ='data.json';

    if(file_exists($archivo)){

        $miJSON=file_get_contents($archivo);
        $miArray=json_decode($miJSON,true);

        echo '<ul class="cartelera">';
        foreach($miArray['carta'] as $plato){
            echo "<li>
                <h2>{$plato['nombre']}</h2>
                <p>{$plato['ingredientes']}</p>
                <span>{$plato['precio']}€</span>
            </li>";
        }
        echo '</ul>';

    }
    else{
        echo "ERROR: No hemos podido cargar los datos";
    }


?>

</main>


<footer>
<footer>
	<p>&copy; Copyright Restaurante- 2025</p>
	<p>
		<a href="#">Aviso legal</a> |
		<a href="#">Política de Cookies</a> |
		<a href="#"> Privacidad</a>
	</p>
</footer>
</footer>

</body>

</html>