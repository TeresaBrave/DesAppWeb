<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="index.php">Volver al inicio</a>

<?php
//0ºRecoger los datos
$nombre=$_GET['nombre'];
$numero=$_GET['numero'];
$precio=$_GET['precio'];

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


//3º La Query de SQL
$sql= "INSERT INTO `juguetes_vintage`(`nombre`,`numero`,`precio`)
       VALUES('$nombre','$numero','$precio');";

//4º Hacemos la consulta SQL 
mysqli_query($conn,$sql);
echo "<p>Datos insertados correctamente</p>";

//5º Cerramos la conexion
 
 mysqli_close($conn);


?>

   
</body>
</html>

