<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <div class="logo">Cines Gijón</div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main>

    <form action="admin.php" method:"GET">  

    <label for="titulo">Título:</label>
    <input type="text" name="tit" id="titulo" placeholder="Título de la película">


    <label for="director">Director:</label>
    <input type="text" name="dir" id="director" placeholder="Director de la película">
    
    <label for="cartel">Cartel:</label>
    <input type="text" name="cart" id="cartel" placeholder="Cartel de la película">

    <button type="submit">Añadir Peliculas</button>
</form>

<?php

if (isset($_POST['tit']) && isset($_POST['dir']) && isset($_POST['cart'])) {
    echo "<p>Titulo: ".$_POST['titulo']."</p>";
    echo "<p>Director: ".$_POST['director']."</p>";
    echo "<p>URL Cartel: ".$_POST['cartel']."</p>";
    
    
    $rutaArchivo ='cartelera.json';
    if(file_exists($rutaArchivo)){
        $datosArchivoJSON = file_get_contents($rutaArchivo);
        $listaArray =  json_decode($datosArchivoJSON,true);


?>
    </main>


    <footer>

    </footer>


</body>
</html>