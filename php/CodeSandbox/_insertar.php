<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "root", "alumnator");

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = $_POST['email'];
$curso = $_POST['curso'];
$descripcion = $_POST['descripcion'];

// Manejo del archivo subido
$foto = "";
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $ruta_destino = 'uploads/';
    if (!is_dir($ruta_destino)) {
        mkdir($ruta_destino, 0777, true);
    }

    $nombre_archivo = basename($_FILES['foto']['name']);
    $ruta_completa = $ruta_destino . $nombre_archivo;

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_completa)) {
        $foto = $ruta_completa; // Guardamos la ruta para insertar en la BD
    } else {
        die("Error al subir el archivo.");
    }
}

// Evitar inyección SQL
$nombre = $conn->real_escape_string($nombre);
$apellido = $conn->real_escape_string($apellido);
$fecha_nacimiento = $conn->real_escape_string($fecha_nacimiento);
$email = $conn->real_escape_string($email);
$curso = $conn->real_escape_string($curso);
$descripcion = $conn->real_escape_string($descripcion);
$foto = $conn->real_escape_string($foto);

// Insertar en la base de datos
$sql = "INSERT INTO alumnos (nombre, apellido, fecha_nacimiento, email, curso, foto, descripcion) 
        VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$email', '$curso', '$foto', '$descripcion')";

if ($conn->query($sql) === TRUE) {
   header ("Location:_insertar-mensaje.php");
} else {
    echo "Error: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
