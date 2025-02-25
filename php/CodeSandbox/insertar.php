<?php require "inc/_config.php"?>
<?php $titulo= "Insertar Alumno Nuevo en la Base de datos"?>
<?php include "inc/_header.php"?>

<section id="agregar">
    <h2>Agregar Nuevo Alumno</h2>
    <form action="_insertar.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required>
        
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="assets/img/" required>

        <button type="submit">Insertar Alumno</button>
    </form>
</section>

<?php include "inc/_footer.php"?>