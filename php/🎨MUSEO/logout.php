<? require 'bloques/config.php'; ?>
<? include 'bloques/header.php'; ?>
    

        <?php


session_unset();// Cerramos la sesion
session_destroy();// Destruimos la sesion

?>
<h1>Has cerrado la sesión</h1>
<p>Puede volver a acceder en <a href="login.php">Login</a></p>

<? include 'bloques/footer.php'; ?>