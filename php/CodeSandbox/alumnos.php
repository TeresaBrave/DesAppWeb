<?php require "inc/_config.php"?>
<?php include "inc/_header.php"?>

<h2>Lista de Alumnos</h2>

<!-- Botones para cambiar la vista -->
<div>
  <button onclick="cambiarVista('lista')">Vista de Lista</button>
  <button onclick="cambiarVista('reticula')">Vista en Retícula</button>
  <button onclick="cambiarVista('tarjetas')">Vista en Tarjetas</button>
</div>

<!-- Campo de búsqueda -->
<input type="text" id="buscador" placeholder="Filtrar Alumno o curso..." onkeyup="filtrarAlumnos()">


<ul id="listaAlumnos" class="lista">

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
    $sql="SELECT id, foto, nombre, apellido, curso FROM Alumnos;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($alumno = mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<img class="alumno" src="'.$alumno['foto'] . '" alt="">';
        echo '<h3 class="nombre">'.$alumno['nombre'] .' '.$alumno['apellido'].'</h3>';
        echo '<p class="curso">'.$alumno['curso'].'</p>';
        echo '</li>';      }
    } else {
      echo "0 Alumnos en la base de datos. Porfavor acuda al apartado instalación.";
    }

    //Cerramos la conexión con la BD
    mysqli_close($conn);


?>
</ul>


<script>
// Filtrar alumnos con el buscador
function filtrarAlumnos() {
    const busqueda = document.getElementById('buscador').value.toLowerCase();
    const alumnos = document.querySelectorAll('.lista li');
    
    alumnos.forEach(function(alumno) {
        const nombre = alumno.querySelector('.nombre').textContent.toLowerCase();
        const curso = alumno.querySelector('.curso').textContent.toLowerCase();
        
        if (nombre.includes(busqueda) || curso.includes(busqueda)) {
            alumno.style.display = '';
        } else {
            alumno.style.display = 'none';
        }
    });
}

// Cambiar vista de la lista
function cambiarVista(vista) {
    const lista = document.getElementById('listaAlumnos');
    
    // Eliminar todas las clases actuales
    lista.classList.remove('lista', 'reticula', 'tarjetas');
    
    // Añadir la clase correspondiente al modo de vista
    lista.classList.add(vista);
}
</script>


<?php include "inc/_footer.php"?>