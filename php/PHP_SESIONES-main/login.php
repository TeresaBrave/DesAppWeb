<?php require '_config.php';?>
<?php include '_header.php';?>
<h1>Acceder</h1>
<p>Acabamos de abrir la sesion</p>

<?php

session_start();// Arrancamos la sesion
$_SESSION['logueado'] = true; //testeo temporal!!

?>

<?php include '_footer.php';?>
