<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talotoys</title>
    <link rel="stylesheet" href="style.css">

  
</head>

<body>

<a href="insertar.php">Agregar coche</a>

<?php
// 1º Conexión con base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "talotoys";

$conn = new mysqli($servername, $username, $password, $dbname);

// 2º Revisar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3º Consulta SQL
$sql = "SELECT * FROM juguetes_vintage";
$resultado_array = mysqli_query($conn, $sql);

// 4º Verificar si hay resultados antes de recorrer el bucle
if (mysqli_num_rows($resultado_array) > 0) {
    echo "<ul class='toys'>";
    
    while ($row = mysqli_fetch_assoc($resultado_array)) {
        echo "<li class='play'>";
        echo "<img src='{$row['imagen_url']}' alt='{$row['nombre']}' class='toy-img'>";
        echo "<div class='toy-info'>";
        echo "<h2>{$row['nombre']}</h2>";
        echo "<p>Número: {$row['numero']}</p>";
        echo "<p>Escala: {$row['escala']}</p>";
        echo "<p>Precio: {$row['precio']} €</p>";
        echo "<p>Stock: {$row['stock']} unidades</p>";
        echo "<p>Año de fabricación: {$row['anio_fabricacion']}</p>";
        echo "<p>Marca: {$row['marca']}</p>";
        echo "<p>Material: {$row['material']}</p>";
        echo "<p>Categoría: {$row['categoria']}</p>";
        echo "<p>Estado: {$row['estado']}</p>";
        echo "<button class='buy-btn'>Comprar</button>";
        echo "</div>";
        echo "</li>";
    }

    echo "</ul>";
} else {
    echo "<p>No hay juguetes disponibles en este momento.</p>";
}

// 5º Cerrar conexión
$conn->close();
?>


</body>

</html>