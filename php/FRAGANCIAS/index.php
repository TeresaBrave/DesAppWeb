<?php include "bloques/_header.php"?>


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
$sql = "SELECT * FROM perfumes";
$resultado_array = mysqli_query($conn, $sql);

// 4º Verificar si hay resultados antes de recorrer el bucle
if (mysqli_num_rows($resultado_array) > 0) {
    echo "<ul class='olor'>";
    
    while ($row = mysqli_fetch_assoc($resultado_array)) {
      echo "<li class='perfume-item'>";
      echo "<img src='{$row['imagen']}' alt='{$row['nombre']}' class='perfume-img'>";
      echo "<div class='perfume-info'>";
      echo "<h2>{$row['nombre']}</h2>";
      echo "<p>Marca: {$row['marca']}</p>";
      echo "<p>Precio: {$row['precio']} €</p>";
      echo "<p>Descripción: {$row['descripcion']}</p>";
      echo "<p>País: {$row['pais']}</p>";
      echo "<p>Slug: {$row['slug']}</p>";
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



<?php include "bloques/_footer.php"?>