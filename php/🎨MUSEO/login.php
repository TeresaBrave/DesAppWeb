<? require 'bloques/config.php'; ?>
<? include 'bloques/header.php'; ?>

<?php

//session_start(); ya esta abierta en el config.php
$_SESSION['logueado'] = true; //testeo temporal!!

// 1º Definimos usuario y contraseña correctos (esto no es necesario, ya que el array ya los tiene)
$usuarioCorrecto = "Teresa";
$passwordCorrecto = "Miguelprofe";

// 2º Creamos un array con los datos de los usuarios
$datosUsuario = [
    [
        'usuario' => 'Teresa',
        'password' => 'Miguelprofe',
        'mail' => 'teresadmngs93@gmail.com',
        'rol' => 'admin'
    ],
    [
        'usuario' => 'Elma',
        'password' => 'compi',
        'mail' => 'elma@gmail.com',
        'rol' => 'usuario'
    ],
];

// 3º Creamos una variable de estado de sesión
$logueado = false;

// 4º Comprobamos si el formulario ha sido enviado vía POST
if (isset($_POST['usuario']) && isset($_POST['clave'])) { 
    // Guardamos los datos introducidos por el usuario en variables, sanitizando la entrada
    $usuarioIngresado = htmlspecialchars($_POST['usuario']);
    $passwordIngresado = htmlspecialchars($_POST['clave']);

    // 5º Comprobamos si el usuario y la contraseña son correctos
    foreach ($datosUsuario as $valor) {
        if ($valor['usuario'] == $usuarioIngresado && $valor['password'] == $passwordIngresado) {
            $logueado = true;
            break; // Si se encuentra, no hace falta seguir buscando
        }
    }

    if ($logueado) {
        include 'bloques/admin.php';
    } else {
        echo "<h3>Las credenciales son incorrectas</h3>";
        echo "<a href='login.php'>Volver a intentar</a>";
    }
} else {
?>
    <h1>Acceso al depósito del museo</h1>
    <form action="login.php" method="post" class="form-obras">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" required>

        <input type="submit" value="Entrar">
    </form>
<?php
}
?>
