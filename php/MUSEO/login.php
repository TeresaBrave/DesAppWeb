<? require 'bloques/config.php'; ?>
<? include 'bloques/header.php'; ?>

<?php
//Definimos usuario y contraseña que han sido introducidos
$usuarioCorrecto = "Teresa";
$passwordCorrecto="Miguelprofe";

//Comprobamos si el formulario ha sido rellenado(via POST) //isset= si existe
if(isset($_POST['usuario']) && isset($_POST['clave']))
{ 
    //Guardamos los datos introducidos por el ussuario en variable
    $usuarioIngresado=$_POST['usuario'];
    $passwordIngresado=$_POST['clave'];

   // echo "El usuario es: $usuarioIngresado <br>";
   // echo "La contraseña es: $passwordIngresado <br>";

    //Comprobamos si el ususario y la contraseña spon correctos
    if($usuarioIngresado==$usuarioCorrecto && $passwordIngresado==$passwordCorrecto)
    {
        //header('Location:admin.php');
        include 'bloques/admin.php';
    }
    else
    {
        echo "Las credenciales son incorrectos <a href='login.php'>Volver a intentar</a>";
    }

}
else{
    ?>
<h1>Acceso al deposito del museo</h1>
<form action="login.php" method="post" class="form-obras">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" id="usuario" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="clave" id="clave" required>
   
    <input type="submit" value="Entrar">
</form>




<?

}

 include 'bloques/footer.php'; ?>