<?php require '_config.php';?>
<?php include '_header.php';?>
<h1>Cerrar</h1>

<?php

session_start(); // Arrancamos la sesion
session_unset();// Cerramos la sesion
session_destroy();// Destruimos la sesion



?>

<?php include '_footer.php';?>
