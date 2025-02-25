<?php require "../inc/_config.php"?>
<?php include "../inc/_header.php"?>



<h1>Instalación: Crear tabla Alumnos</h1>
<p>Este apartado crea la base de datos y el contenido de la misma por primera vez.</p>

<?php 
// Datos de conexión
$host ='localhost';
$user ='root';
$pass ='root';
$dbna ='Alumnator';

    // Crear conexión
    $conn = mysqli_connect($host, $user, $pass, $dbna);

    // Chequear coneción
    if (!$conn) { die("Conexión fallida: " . mysqli_connect_error()); }

    // Crear base de datos
    $sql="CREATE TABLE IF NOT EXISTS Alumnos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255),
        apellido VARCHAR(255),
        fecha_nacimiento DATE,
        email VARCHAR(255),
        curso VARCHAR(255),
        foto VARCHAR(255),
        descripcion TEXT
        );";


    if (mysqli_query($conn, $sql)) {
    echo "<h2>Tabla Alumnos creada correctamente en la Base de datos <strong>$dbna</strong> creada correctamente</h2>";
    } else {
    echo "Error al crear la tabla: " . mysqli_error($conn);
    }
    //Cerramos la conexión con la BD
    mysqli_close($conn);

?>

<ul>
    <li>PASO 1: <a href="install/install_creartabla.php">Creación de Tabla Alumnos dentro de base de DATOS Alumnator</a></li>
    <li>PASO 2: <a href="install/install_insertarDatos.php">Inserción de Datos de los Alumnos en la tabla Alumnos</a></li>
</ul>


<a href="install/install_insertarDatos.php">Siguiente paso: Insertar datos en tabla</a>



<?php include "../inc/_footer.php"?>
<?php //insertar('pie')?>

